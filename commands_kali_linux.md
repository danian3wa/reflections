# Commands Kali Linux

## How to Protect Grub Boot Loader by Password in Kali Linux.

GRand Unified Bootloader (GRUB) is a default bootloader in all Unix-like operating systems. As promised in our earlier article “How to reset a forgotten root password“, here we are going to review how to protect GRUB with a password. As mentioned earlier post, anyone can login into single-user mode and may change system setting as needed. This is the big security flow. So, to prevent such unauthorized person to access system we may require to have grub with password protected.

Here, we’ll see how to prevent a user from entering into a single user mode and changing the settings of a system that may have direct or physical access to the system.

Open Kali  Linux and then go to the terminal.
Go to grub.d file by the following command

```bash
cd  /etc/grub.d
```

Create the password by typing this command

```bash
grub2-mkpasswd-pbkdf2
```

After you enter the password, copy the whole generated code that appears.
Now edit the file/etc/grub.d/10_linux using vim by following commands
```bash
cat << EOF
set superusers="Username"
password_pbkdf2 Username 'paste the generated code   copied above here'
EOF
```

Save the changes and exit the editor.
Update grub using either of the commands;

```bash
update-grub
```
```bash
grub-mkconfig -o /boot/grub/grub.cfg
```
