# nginx php-fpm permission

## NGINX and PHP-FPM permissions

Being an avid StackExchange user, I could see how many users completely lack an understanding of the proper permissions model in the most popular, LEMP stack.

You can see recommendations that 777 is never good, but I could not see a simple guide on permissions that can be used as a reference point for everyone.

The following permissions/ownership model applies to all NGINX/PHP-FPM websites and allows you to host websites without any problems, in a secure way.

## PHP-FPM user (as known as the website user)

The PHP-FPM user should be a special user that you create for running your website, whether it is Magento, WordPress, or anything.
Its characteristics are the following:

- This is the user that PHP-FPM will execute scripts with
- This user must be unique. Do not reuse an existing user account. Create a separate user for each website!
- Do not reuse any `sudo` capable users. If your website user is `ubuntu` or `centos`, or, `root` – you’re asking for much trouble.
- Do not use` www-data` or `nginx` as website user. This is wrong and will lead to more trouble!
- The username should reflect either the domain name of the website that it `runs`, or the type of corresponding CMS, e.g. magento for a `Magento` website; or `example` for `example.com` website.

Let’s create this user:
```bash
useradd example
```

Now, set its password by running:

```bash
passwd example
```


Each website in PHP-FPM should be run under a separate pool. In the pool settings file, e.g. `/etc/php-fpm.d/example.com.conf` you must set things to match with the created username:

```bash
listen = /var/run/php-fpm/example.com.sock
listen.owner = example
listen.group = example
listen.mode = 0660
user = example
group = example
```

## The webserver user

NGINX must run with it own unprivileged user, which is `nginx` (RHEL-based systems) or `www-data` (Debian-based systems).

This is the `global` webserver user that is used for all websites. So the configuration is straightforward and translates to the following directives in `/etc/nginx/nginx.conf`

```bash
user nginx;
```

## Connecting website and webserver users
Now the magic. We must connect things up so that NGINX (webserver) user can read files that belong to the website user’s group.

This will allow us to control what NGINX can read or not, via group chmod permission bit.

```bash
usermod -a -G example nginx
```

This reads as: add `nginx` user to group `example`


## File ownership (chown)

Here is a simple rule: all the files should be owned by the website user and the website user’s group:

```bash
chown -R example:example /path/to/website/files
```

### Incorrect `chown` examples:

- `www-data:www-data`
- `example:nginx`
- `nginx:nginx`

### Correct chown example:

- `example:example`
- `foo:foo`

## Permissions (chmod)

The following general chmod setup will allow for any website to function properly:

```bash
chmod -R u=rwX,g=rX,o= /path/to/website/files
```

This translates to the following:

- Website user `(example)` can read, write all files, and read all directories
- Website group (webserver user) can read all files and traverse all directories, but not write
- All other users cannot read or write anything

In octal notation, this results in `0750` chmod for all directories and `0640` for all files.

If you simply stick to this permissions model, you will not encounter any `chmod` / `chown` issues in the future.
This is the only proper model, functionality, and security-wise.

These general permissions are quite secure already out of the box. But of course, if you know your website structure, you may want to tighten up permissions even further.

## A read-only user

When you want to provide a read-only access for someone else, you can leverage `setfacl` program. For example, to allow user `foo` to read a directory and all files inside:

```bash
setfacl --recursive --modify u:foo:rX,d:u:foo:rX /path/to/website/files
```

## Troubleshooting tips

To see all directory and file permissions, up to a specific path, use this command:

```bash
namei -om /path/to/file/or/directory
```
