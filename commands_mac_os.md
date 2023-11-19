# Apple macOS useful terminal commands

#### command history list of all the commands that you have run in the terminal

```bash
history
```

#### shows the path of the current folder

```bash
pwd
```

#### clears the terminal screen

```bash
clear
```

####  used to change the current working directory to the "Documents" directory

```bash
cd Documents
```

#### used to change the current working directory to the parent directory (one level up) in the file system hierarchy

```bash
cd ..
```

#### used to list the files and directories in the current working directory

```bash
ls
```

#### Provides a detailed, long-format listing that includes additional information such as file permissions, owner, group, size, and modification date.

```bash
ls -l
```

#### Shows hidden files as well (those whose names start with a dot .).

```bash
ls -a
```

#### Human-readable sizes, displaying file sizes in a more readable format (e.g., KB, MB)

```bash
ls -h
```

#### for a long-format listing with human-readable sizes.

```bash
ls -lh
```

#### used to create a new directory (folder) in a file system named "New folder"

```bash
mkdir New folder
```

#### used to create an empty file named "new_file.txt" in the current working directory

```bash
touch new_file.txt.
```

#### used to remove (delete) a file named "my_file.txt" in the current working directory

```bash
rm my_file.txt
```

#### remove a file without being prompted for confirmation, you can use the -f (force) option

```bash
rm -f my_file.txt
```

#### remove a directory and its contents, you may need to use the -r (recursive) option. Exercise caution when using the rm command, especially with the -r option, as it can lead to the irreversible deletion of files and directories.

```bash
rm -r My folder
```   

#### it will modify the "README.md" file by replacing every instance of "world" with "world." throughout the file

```bash
sed -i s/world/world./g README.md
```

#### replace every occurrence of the string "world" with "world!" in the "README.md" file and save the changes in-place. The \! is used to escape the exclamation mark to ensure it is treated as a literal character in the replacement string

```bash
sed -i s/world/world\!/g README.md
```

#### In the curent folder it creates a file name liste.txt and write the name of files and directories in it.

```bash
ls >> liste.txt
```

#### In the curent folder it creates a file name liste2.txt and write the name of files, folders, subfolders, hiden files with size permision, owner in time order in it.

```bash
ls -R -lat >> liste2.txt
```

#### used to display information about listening network sockets, including the protocol, address and port, process ID (PID), and process name

```bash
netstat -Watnlv | grep LISTEN | awk '{"ps -o comm= -p " $9 | getline procname;colred="\033[01;31m";colclr="\033[0m"; print cred "proto: " colclr $1 colred " | addr.port: " colclr $4 colred " | pid: " colclr $9 colred " | name: " colclr procname;  }' | column -t -s "|"
```

#### it kills (stops) the process with the pid number 588

```bash
kill -9 588 
```

#### Show the curent network status details

```bash
sudo lsof -PiTCP -sTCP:LISTEN
```

#### Show the curent network status details

```bash
netstat -anvp tcp | awk 'NR<3 || /LISTEN/'
```

#### Show group access status details

```bash
dscl . -read /Groups/admin | grep GroupMembership 
```

#### installs Homebrew on your Mac
   
```bash
/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```

#### appends the following lines to the .zprofile file in the /Users/username directory. These lines are used to initialize the Homebrew environment variables in the zsh shell.
   
```bash
(echo; echo 'eval "$(/opt/homebrew/bin/brew shellenv)"') >> /Users/username/.zprofile
```

#### initializes the Homebrew environment variables in the current shell session. This is necessary for using Homebrew commands

```bash
eval "$(/opt/homebrew/bin/brew shellenv)"
```

#### install Git using Homebrew
   
```bash
brew install git
```

#### install PHP using Homebrew
    
```bash
brew install php
```

#### starts PHP services
    
```bash
brew services start php
```

#### Show php processes

```bash
ps -ef | grep php  
```

#### To install the Apache HTTP Server (httpd) on macOS using Homebrew

```bash
brew install httpd
```

#### start the Apache HTTP Server 

```bash
sudo apachectl start
```

#### stop the Apache HTTP Server 

```bash
sudo apachectl stop
```

#### il faut verifier chatGpt command

```bash
netstat -vanp tcp | grep Google\Chrome 
```

#### List all running processes

```bash
ps
```

#### list all running processes, along with their CPU and memory usage

```bash
ps -o pid,user,cpu,mem
```

#### List all running processes on a macOS system, including those that do not have a controlling terminal. This is in contrast to the ps command by itself, which only lists processes that have a controlling terminal.

```bash
ps -x
```

#### List all processes owned by the current user

```bash
ps -u $USER
```

#### List all processes running the "chrome" command

```bash
ps -C chrome
```

#### List all processes with a PID greater than 1000

```bash
ps -p 1000
```

####  all of user jhon’s processes:

```bash
ps -u jhon
```

####  all occurrences of a program:

```bash
ps -axc | grep -w xCode
```

#### processes on terminal ttys000:

```bash
ps -ts000
```

#### particular processes 1, 2, and 3505:

```bash
ps -p1,2,3505
```

#### and all processes and their threads:

```bash
ps -axM
```

#### gives the current value of the max socket buffer size

```bash
sysctl -a | grep maxsockbuf
```

#### traceroute Google DNS

```bash
traceroute 8.8.8.8
```

#### show ports list 

```bash
lsof -nP +c 15 | grep LISTE
```

#### shows the routing table

```bash
netstat -rn
```  

#### shows hidden files in macOS Finder

```bash
defaults write com.apple.Finder AppleShowAllFiles true
```

#### kill all Finder

```bash
killall Finder
```

#### This output indicates that there is a TCP socket listening on port 49000. The socket is in the LISTEN state, which means that it is waiting for connections from other hosts

```bash
netstat -an | grep 49000
```

#### lists all open files and processes that are listening on port 49000

```bash
sudo lsof -n -i :49000
```

#### find what listens on TCP Ports

```bash
sudo lsof -iTCP -sTCP:LISTEN -P -n
```

#### used to disable the remote login service

```bash
sudo launchctl disable system/com.apple.remoted
```

#### List and verify that the remote login service is enable or disabled

```bash
launchctl print system/com.apple.remoted
```

#### used to disable the Media Remote service

```bash
sudo launchctl disable system/com.apple.mediaremoted
```

#### To list and verify that the Media Remote service is disabled

```bash
launchctl print system/com.apple.mediaremoted
```

#### disables the XartStorage service on macOS. XartStorage is a system service that provides a variety of features, including: generating and managing thumbnails for images, videos, and other files

```bash
sudo launchctl disable system/com.apple.xartstorage
```

#### generates an ECDSA SSH key pair with a comment of your choice and saves the public key to ~/.ssh/id_github.pub. The -o option tells ssh-keygen to generate an OpenSSH format key pair. The -a option specifies the number of bits to use for the key. The -t option specifies the type of key to generate. The -f option specifies the file name to save the key pair to. The -C option specifies the comment to include in the key pair.

```bash
ssh-keygen -o -a 100 -t ecdsa -f ~/.ssh/id_github -C "jhon.doe@gmail.COM"
```

#### starts the SSH agent and prints the necessary environment variables to standard output
   
```bash
eval "$(ssh-agent -s)"
```

#### adds your SSH key to the SSH agent and stores the passphrase in the macOS Keychain. This means that you will not need to enter your passphrase each time you use your SSH key

```bash
ssh-add --apple-use-keychain ~/.ssh/id_github
```

#### copies the contents of your ~/.ssh/id_github.pub file to your clipboard

```bash
pbcopy < ~/.ssh/id_github.pub
```

#### creates an empty file called id_github in the .ssh directory in your home directory

```bash
touch ~/.ssh/id_github
```

#### updates all of the packages that are installed with Homebrew to the latest versions

```bash
brew upgrade
```

#### prints the version of Node.js that is installed on your system

```bash
node -v
```

#### prints the version of npm that is installed on your system
   
```bash
npm -v
```

#### install the latest version of npm globally on your system

```bash
sudo npm install -g npm@latest
```

#### To install Composer, a dependency manager for PHP. It works by downloading the Composer installer script, verifying its integrity, and then running it.

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"\
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"\
php composer-setup.php\
php -r "unlink('composer-setup.php');"
```

#### installs the Symfony CLI on Unix-like systems, such as Linux and macOS

```bash
curl -sS https://get.symfony.com/cli/installer | bash
```

#### moves the Symfony CLI binary from the user's home directory to the global /usr/local/bin directory. This makes the Symfony CLI available to all users on the system.

```bash
sudo mv /Users/username/.symfony5/bin/symfony /usr/local/bin/symfony
```

#### installs the Yarn package manager globally on your system

```bash
sudo npm install --global yarn
```

#### To check the version of npx that is installed on your system

```bash
npx -v
```

####

```bash
eval "$(ssh-agent -s)"
```

####

```bash
ssh-add -l -E ecdsa
```

####

```bash
ssh-add -l -E sha256
```

####
   
```bash
 ssh -T -p 443 git@ssh.github.com
```

####

```bash
ssh -T git@github.com
```

####
   
```bash
 ssh -T -p 443 git@ssh.github.com
```

####

```bash
ssh -T jhondoe@github.com
```

####

```bash
ssh -T git@github.com
```

####

```bash
pbcopy < ~/.ssh/id_github.pub
```

####

```bash
git config --global --list
```

####

```bash
ssh-keygen -t ed25519 -C "jhondoe@example.com"
```

####

```bash
eval "$(ssh-agent -s)"
```

####

```bash
open ~/.ssh/config
```

####
   
```bash
ssh-add --apple-use-keychain ~/.ssh/id_ed25519
```
####

```bash
pbcopy < ~/.ssh/id_ed25519.pub
```

####

```bash
ssh -T jhondoe@github.com
```

####

```bash
ssh -T -p 443 git@ssh.github.com
```

####

```bash
ssh -vT git@github.com
```

####  lists all of the Python-related packages that are installed on your system using Homebrew

```bash
brew list | grep python
```

#### command displays information about the Python formula on macOS

```bash
brew info python
```   

#### displays the version of Python 3 that is installed on your system

```bash
python3 --version
```

#### displays the version of pip3 that is installed on your system

```bash
pip3 -V
```

#### install the requests package using pip3

```bash
pip3 install requests
```

#### list all of the Python 3.11 files and directories in the current directory

```bash
cd /usr/local/bin; ls -l | grep python3.11
```

#### enables the network interface en6 on your Mac

```bash
sudo ifconfig en6 up
```

####

```bash
ssh-add --apple-use-keychain ~/.ssh/id_ed25519
```

####

```bash
sudo launchctl disable remoted
```

####

```bash
sudo launchctl disable system/com.apple.mediaremoted
```

####

```bash
sudo launchctl disable system/com.apple.remoted
```

####

```bash
sudo lsof -n -i :49155
```

####

```bash
netstat -an | grep 49000
```

####

```bash
sudo kill -9 297
```
####

```bash
ps aux | grep mediaremoted
```

####

```bash
launchctl list | grep remoted
```

#### will list all of the user accounts on your Mac. This includes both standard user accounts and administrator accounts.

```bash
dscl . list /Users
```

####

```bash
sudo lsof -iTCP -sTCP:LISTEN -P -n
```

#### will list the launchctl job for the OpenSSH SSH server. This job is responsible for starting and stopping the SSH server.

```bash
sudo launchctl list com.openssh.sshd
```

#### Turns on firewall logging

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingmode on
```

#### will send a HUP (hangup) signal to the socketfilterfw process. This will cause the socketfilterfw process to reload its configuration

```bash
sudo pkill -HUP socketfilterfw
```

####

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --blockapp /usr/libexec/remoted
```

####

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getloggingopt
```

#### will disable the Ethernet interface en0

```bash
sudo ifconfig en0 down
```

#### list all of the extended attributes (xattrs) associated with the file.txt

```bash
xattr -l /Users/username/file.txt
```  

#### Remove the com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m from commandes_mac_os.md file

```bash
xattr -d com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m commandes_mac_os.md
```

#### display the metadata associated with the file.txt

```bash
mdls  /Users/username/file.txt
```

#### will rebuild the Spotlight index. This will force Spotlight to re-index all of the files on your Mac, which can improve the accuracy of Spotlight searches.

```bash
sudo mdutil -t
```

####  it checks the status and integrity of the metadata index on the root volume. This test is useful for identifying potential issues with the indexing service and ensuring that the metadata index is functioning correctly.

```bash
sudo mdutil -t /
```

#### used to manage the metadata indexing service on macOS. If indexing is currently disabled: The command will start the indexing process for all volumes. If indexing is currently enabled: The command will stop the indexing process for all volumes.

```bash
sudo mdutil -a
```

## Network on Mac OS

#### displays the kernel routing table on Unix-like operating systems, including macOS. The routing table is used to determine how to route network traffic to its destination.

```bash
netstat -rn
```

#### used to configure and display the status of network interfaces on Unix-like operating systems, including macOS

```bash
ifconfig
```

#### Lists UP network interfaces 

```bash
ifconfig -a | grep '[<,]UP[,>]' | grep -v '[<,]LOOPBACK[,>]'
```

####

```bash
netstat -anvp tcp | awk 'NR<3 || /LISTEN/'
```

#### Lists network connection type

```bash
networksetup -listallnetworkservices
```

#### Lists network interfaces with mac addresses

```bash
networksetup -listallhardwareports
```

#### switch the current user to the superuser or root user

```bash
sudo su
```

## Apple macOS Firewall Application

#### enables the macOS Application Firewall

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setglobalstate on
```

#### displays the help text for the socketfilterfw command. This command is used to manage the macOS Application Firewall.

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw -h
```

#### enables logging for the macOS Application Firewall.

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingmode on
```

#### outputs the current logging mode for the macOS Application Firewall

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getloggingopt
```

#### sets the logging mode for the macOS Application Firewall to "detail". This will log all firewall events in detail, including the source and destination IP addresses, ports, and protocols.

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingopt detail
```

#### enables stealth mode for the macOS Application Firewall. Stealth mode makes your computer less visible to other devices on the network, which can help to reduce the risk of being attacked

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setstealthmode on
```

#### outputs the global state of the macOS Application Firewall.

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate
```

#### outputs whether the macOS Application Firewall is configured to allow signed applications.

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getallowsigned
```

#### lists all of the applications that have been granted permission to access the network through the macOS Application Firewall.
   
```bash
 sudo /usr/libexec/ApplicationFirewall/socketfilterfw --listapps
```

#### enables debug mode for the macOS Application Firewall. This will log additional information about the firewall's activity, which can be helpful for troubleshooting problems with the firewall.

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw -d
```

#### clears all of the firewall rules that have been added to the macOS Application Firewall. CAUTION

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw -k
```

#### lists all of the firewall rules that have been added to the macOS Application Firewall.

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw -l
```

#### blocks all incoming connections to your Mac. This can be useful for security reasons, but it can also prevent you from using some applications and services.

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setblockall on
```

## Nmap Network Scanning

####  scanning the IP address 216.163.128.20

```bash
nmap 216.163.128.20
```

#### trace the route that packets take from your local machine to the destination IP address 216.163.128.20

```bash
traceroute 216.163.128.20
```

#### TCP FIN scan against the IP address 216.163.128.20 . By sending a FIN packet and observing the response, the scanner can determine whether a port is open, closed, or filtered by a firewall.

```bash
sudo nmap -sF 216.163.128.20
```

#### This is an option that specifies a UDP scan, the range of ports to scan and 1->100 and the target IP address

```bash
sudo nmap -sU -p1-100 216.163.128.20
```

#### This option specifies the filename (scan_results.txt) where the scan results will be saved
   
```bash
sudo nmap -o scan_results.txt 216.163.128.20
```

#### The -oD option is used to save results in a simple "greppable" format.

```bash
sudo nmap -oD 216.163.128.20
```

#### -oG the greppable output format is designed to be easily processed by tools like grep, allowing you to quickly extract specific information from the scan results

```bash
sudo nmap -oG 216.163.128.20
```

#### use grep to extract open ports

```bash
grep '/open/' scan_results.txt
```

#### -Pn: This option tells Nmap to skip host discovery and assume that the target is online

```bash
sudo nmap -Pn 216.163.128.20
```

#### This option specifies a list of decoy IP addresses separated by commas. These decoy addresses are used to obfuscate the true source of the scan.

```bash
sudo nmap -D 192.168.1.2, 192.168.1.3, 192.168.1.4 216.163.128.20
```

#### -A: This option enables aggressive scanning, which includes various advanced and intrusive techniques. It is a shorthand for enabling several other options, including version detection (-sV), script scanning (-sC), and OS detection (-O). The -A option is often used for a more comprehensive and detailed scan.

```bash
nmap -A 216.163.128.20
```

#### scan multiple hosts listed in a file (presumably net_home.txt). This assumes that net_home.txt contains a list of IP addresses or hostnames, with each entry on a separate line. The -A option will then be applied to each host listed in the file and save the output to a file named scan_results.txt.

```bash
nmap -A -iL net_home.txt > scan_results.txt
```

#### If you want to append the results to an existing file instead of overwriting it, you can use the >> operator

```bash
nmap -A -iL net_home.txt >> scan_results.txt
```

#### ????

```bash
nmpa -oS test.txt 216.163.128.20
```

#### ?????

```bash
nmap -oB 216.163.128.20
```

#### performs a scan on the IP address 216.163.128.20 and saves the results in multiple formats using the specified base filename "digihome." The -oA option is a convenient way to save output in three major formats: normal (text), XML, and grepable.

```bash
nmap -oA digihome.txt 216.163.128.20
```

#### The -p- option instructs Nmap to scan all 65535 ports rather than specifying a specific range.

```bash
nmap -p- 216.163.128.20
```

##  PF packet filter on macOS

#### display the current state of the packet filter (PF) rules

```bash
sudo pfctl -sr
```

#### used to add the IP address 216.163.128.20 to a table named "blockedips" within the PF firewall

```bash
sudo pfctl -t blockedips -T add 216.163.128.20
```

#### used to reload the PF firewall rules from the specified configuration file, in this case, /etc/pf.conf

```bash
sudo pfctl -f /etc/pf.conf
```

#### used to display the contents of the PF table named "blockedips"

```bash
sudo pfctl -t blockedips -T show
```

#### used to load or reload PF firewall rules from the specified configuration file, in this case, /etc/pf.conf.local.

```bash
sudo pfctl -f /etc/pf.conf.local
```

#### used to display information about the current state and configuration of the Packet Filter (PF) firewall

```bash
sudo pfctl -s info
```

#### using the tcpdump tool to capture and display packet information from the PF (Packet Filter) firewall log interface (pflog0)

```bash
sudo tcpdump -n -e -ttt -i pflog0\
```

#### used to load the PF (Packet Filter) logging kernel extension

```bash
sudo kextload /System/Library/Extensions/pflog.kext
```

####

```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate
```

#### used to display the entire ruleset of the PF (Packet Filter) firewall, including the rules, options, and other configuration details. 
   
```bash
sudo pfctl -sa
```

#### display the status of the PF (Packet Filter) firewall without printing the ruleset

```bash
sudo pfctl -q
```

#### used to display the version of the PF (Packet Filter) firewall currently running on the system

```bash
sudo pfctl -v
```

#### used to enable the PF (Packet Filter) firewall on macOS

```bash
sudo pfctl -e
```

#### used to display the current ruleset of the PF (Packet Filter) firewall

```bash
sudo pfctl -s rules
```

## Network & Processes

#### used to list open files and network connections on a system, specifically targeting the network connections that are using the port 8080.

```bash
lsof -Pwni :8080
```

#### lists all open files (including network connections) and filters for processes that are in a LISTEN state, indicating open ports

```bash
sudo lsof -i -P -n | grep LISTEN
```

#### shows all network connections (both listening and established) and filters for those in a LISTEN state

```bash
sudo netstat -an | grep LISTEN
```

#### uses Nmap to scan all ports on the localhost. Replace "localhost" with the actual IP address if you want to scan a specific machine

```bash
sudo nmap -p- localhost
```

#### show you processes that are using the specified TCP port (8080). The output will include details about the processes, such as the process ID (PID), user, and the type of connection

```bash
sudo lsof -i :8080
```

#### not working   ????!!!

```bash
fuser -vn tcp 8080
```

## Python

#### used to check the version of Python 3 installed on your system

```bash
python3 -V
```

#### used to upgrade the pip package, which is the package installer for Python

```bash
pip3 install --upgrade pip
```

#### used to install Python packages listed in a requirements.txt file system-wide using the pip package manager

```bash
sudo pip3 install -r requirements.txt
```

#### used to install the Xcode Command Line Tools 

```bash
xcode-select --install
```

#### used to upgrade the pip package for the Python 3 interpreter that comes bundled with Xcode on macOS

```bash
/Applications/Xcode.app/Contents/Developer/usr/bin/python3 -m pip install --upgrade pip
```

#### used to install portaudio

```bash
brew install portaudio
```

#### used to install ffmpeg

```bash
brew install ffmpeg
```
#### used to install PyAudio==0.2.13

```bash
pip3 install PyAudio==0.2.13
```

####  used to install GoogleBard==0.0.7

```bash
pip3 install GoogleBard==0.0.7
```

#### used to install playsound==1.2.2

```bash
pip3 install playsound==1.2.2
```

#### used to install SpeechRecognition==3.10.0

```bash
pip3 install SpeechRecognition==3.10.0
```

#### used to install openai_whisper==20230314

```bash
pip3 install openai_whisper==20230314
```

#### used to install pyttsx3==2.90

```bash
pip3 install pyttsx3==2.90
```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

#### 

```bash

```

