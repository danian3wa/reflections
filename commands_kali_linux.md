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
sudo grub-mkpasswd-pbkdf2
```

After you enter the password, copy the whole generated code that appears.
Now edit the file /etc/grub.d/10_linux using vim by following commands

```bash
sudo vim 10_linux
```

add this at the end of the 10_linux file

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


## Share Files Between Linux Machines Over a Network

### Using Samba

#### Installing and Setting up samba

Firstly, let's install samba using apt:

```bash
sudo apt update
```

```bash
sudo apt install samba
```

Next, let's confirm if the installation succeeded:

```bash
whereis samba
```

samba: /usr/sbin/samba ...

Now, let's edit samba's configuration file to add the path to the directory we intend to share. For this example, we'll use sambashare which contains a child directory named doc1.

Let's add the following lines at the bottom of the file:

```bash
sudo vi /etc/samba/smb.conf
```

```bash
[sambashare]
comment = Samba on Kali Linux
path = /home/username/sambashare
read only = no
browsable = yes
```

Following, let's save the configuration file and restart samba for the changes to take effect:

```bash
sudo service smbd restart
```

Next, we must update the firewall rules to allow samba traffic:

```bash
sudo ufw allow Samba
```

Subsequently, we must create a samba user account for each user who accesses the shared directory. We'll use the smbpasswd command to set the samba password for each user:

```bash
sudo smbpasswd -a username
```

### Accessing Files Shared by Samba

```bash
smb://192.168.0.100/:
```



```bash

```
