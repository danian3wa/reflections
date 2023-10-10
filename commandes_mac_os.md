# Apple macOS useful terminal commands

#### command history list of all the commands that you have run in the terminal
    
```bash
history
```

#### clears the terminal screen
    
```bash
clear
```

#### In the curent folder it create a file name liste.txt and write the name of files and directories in it.
    
```bash
ls >> liste.txt
```

#### In the curent folder it create a file name liste2.txt and write the name of files, folders, subfolders, hiden files with size permision, owner in time order in it.
    
```bash
ls -R -lat >> liste2.txt
```

#### Show the curent network status details
    
```bash
netstat -Watnlv | grep LISTEN | awk '{"ps -o comm= -p " $9 | getline procname;colred="\033[01;31m";colclr="\033[0m"; print cred "proto: " colclr $1 colred " | addr.port: " colclr $4 colred " | pid: " colclr $9 colred " | name: " colclr procname;  }' | column -t -s "|"
```

#### kills (stop) the process with the pid number 588
    
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

#### Show php processes
      
```bash
ps -ef | grep php  
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
sysctl -a|grep maxsockbuf
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

#### shows hidden files on in macos Finder
    
```bash
defaults write com.apple.Finder AppleShowAllFiles true
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

#### sets your global Git username to Firstname Lastname
    
```bash
git config --global user.name "Jhon DOE"
```

#### sets your global Git email address
    
```bash
git config --global user.email jhon.doe@gmail.com
```

#### lists all of your global Git configuration settings
    
```bash
git config --global --list
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

#### To install the Apache HTTP Server (httpd) on macOS using Homebrew
    
```bash
brew install httpd
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
ssh -T git@github.com
```

####
    
```bash
ssh -vT git@github.com
```

####
   
```bash
 ssh -T jhondoe@github.com
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
launchctl list |grep remoted
```

####
    
```bash
dscl . list /Users
```

####
    
```bash
sudo lsof -iTCP -sTCP:LISTEN -P -n
```

####
    
```bash
sudo launchctl list com.openssh.sshd
```

#### Turns on firewall logging
    
```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingmode on
```

####
    
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

####
    
```bash
sudo ifconfig en6 down
```

####

```bash
xattr -l /Users/daniel/01_09_2023_19_34.pcapng
```  

#### Remove the com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m from commandes_mac_os.md file
    
```bash
xattr -d com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m commandes_mac_os.md
```

####
    
```bash
mdls  /Users/username/yarn.lock
```

####
    
```bash
mdls  /Users/username/commandes_mysql.md
```

####
    
```bash
netstat -anvp tcp | awk 'NR<3 || /LISTEN/'
```

####
    
```bash
sudo mdutil -t
```

####
    
```bash
sudo mdutil -t /
```

####
    
```bash
sudo mdutil -a
```

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

#### Lists network connection type
    
```bash
networksetup -listallnetworkservices
```

#### Lists network interfaces with mac addresses
    
```bash
networksetup -listallhardwareports
```

####

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

####
    
```bash
nmap 216.163.128.20
```

####
    
```bash
traceroute 216.163.128.20
```

####
    
```bash
sudo nmap -sF 216.163.128.20
```

####
    
```bash
sudo nmap -sU -p1-100 216.163.128.20
```

####
   
```bash
sudo nmap -o 216.163.128.20
```

####
    
```bash
sudo nmap -oD 216.163.128.20
```

####
    
```bash
sudo nmap -Pn 216.163.128.20
```

####
    
```bash
sudo nmap -D 216.163.128.20
```

####
    
```bash
nmap -A 216.163.128.20
```

####
    
```bash
nmap -A net_home_22.txt 216.163.128.20
```

####
    
```bash
nmap -A nethome2.txt 216.163.128.20
```

####
    
```bash
nmpa -oS test.txt 216.163.128.20
```

####
    
```bash
nmap -Pn digi_home_3.txt 216.163.128.20
```

####
    
```bash
nmap -oB digihome2.txt 216.163.128.20
```

####
    
```bash
nmap -oA digihome2.txt 216.163.128.20
```

####
    
```bash
sudo pfctl -sr
```

####    
    
```bash
sudo pfctl -t blockedips -T add 216.163.128.20
```

####
    
```bash
sudo pfctl -f /etc/pf.conf
```

####
    
```bash
sudo pfctl -t blockedips -T show
```

####
    
```bash
sudo pfctl -f /etc/pf.conf.local
```

####
    
```bash
sudo pfctl -s info
```

####
    
```bash
sudo tcpdump -n -e -ttt -i pflog0\
```

####
   
```bash
 sudo pfctl -f /etc/pf.conf.local
```

####
    
```bash
sudo kextload /System/Library/Extensions/pflog.kext
```

####
    
```bash
sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate
```

####
    
```bash
sudo pfctl -s info
```

####
   
```bash
sudo pfctl -sa
```

#### queries the status of the pf firewall. It is equivalent to the command sudo pfctl -s info
    
```bash
sudo pfctl -q
```

####
    
```bash
ifconfig pflog0
```

####
    
```bash
sudo pfctl -v
```

####
    
```bash
sudo pfctl -e
```

####
    
```bash
ifconfig pflog0
```

####
    
```bash
sudo tcpdump -v -n -e -ttt -i pflog0
```