#### command history is a list of all the commands that you have run in the terminal
    history
```bash

```
#### clears the terminal screen
    clear
```bash

```
#### In the curent folder it create a file name liste.txt and write the name of files and directories in it.
    ls >> liste.txt
```bash

```
#### In the curent folder it create a file name liste2.txt and write the name of files, folders, subfolders, hiden files with size permision, owner in time order in it.
    ls -R -lat >> liste2.txt
```bash

```
#### Show the curent network status details
    netstat -Watnlv | grep LISTEN | awk '{"ps -o comm= -p " $9 | getline procname;colred="\033[01;31m";colclr="\033[0m"; print cred "proto: " colclr $1 colred " | addr.port: " colclr $4 colred " | pid: " colclr $9 colred " | name: " colclr procname;  }' | column -t -s "|"
```bash

```
#### kills (stop) the process with the pid number 588
    kill -9 588 
```bash

```
#### Show the curent network status details
    sudo lsof -PiTCP -sTCP:LISTEN
```bash

```
#### Show the curent network status details
    netstat -anvp tcp | awk 'NR<3 || /LISTEN/'
```bash

```
#### Show group access status details
    dscl . -read /Groups/admin | grep GroupMembership 
```bash

```
#### Show php processes
    ps -ef | grep php    
```bash

```
#### start the Apache HTTP Server 
    sudo apachectl start
```bash

```
#### stop the Apache HTTP Server 
    sudo apachectl stop
```bash

```
#### il faut verifier chatGpt command
    netstat -vanp tcp | grep Google\Chrome   
```bash

```
#### List all running processes
    ps
```bash

```
#### list all running processes, along with their CPU and memory usage
    ps -o pid,user,cpu,mem
```bash

```
#### List all running processes on a macOS system, including those that do not have a controlling terminal. This is in contrast to the ps command by itself, which only lists processes that have a controlling terminal.
    ps -x
```bash

```
#### List all processes owned by the current user
    ps -u $USER
```bash

```
#### List all processes running the "chrome" command
    ps -C chrome
```bash

```
#### List all processes with a PID greater than 1000
    ps -p 1000
```bash

```
####  all of user daniel’s processes:
    ps -u daniel
```bash

```
####  all occurrences of a program:
    ps -axc | grep -w xCode
```bash

```
#### processes on terminal ttys000:
    ps -ts000
```bash

```
#### particular processes 1, 2, and 3505:
    ps -p1,2,3505
```bash

```
#### and all processes and their threads:
    ps -axM
```bash

```
#### gives the current value of the max socket buffer size
    sysctl -a|grep maxsockbuf
```bash

```
#### traceroute Google DNS
    traceroute 8.8.8.8
```bash

```
#### show ports list 
    lsof -nP +c 15 | grep LISTE
```bash

```
#### AirDrop in reglage systeme ON et OFF  https://developer.apple.com/forums/thread/682332  lisen on port 5000 et 7000 -> Récepteur AirPlay off configured to mac mini 02/07/2023
```bash

```
#### shows the routing table
  ```bash

```  netstat -rn
```bash

```
#### shows hidden files on in macos Finder
    defaults write com.apple.Finder AppleShowAllFiles true
```bash

```
#### This output indicates that there is a TCP socket listening on port 49155. The socket is in the LISTEN state, which means that it is waiting for connections from other hosts
    netstat -an | grep 49155
```bash

```
#### lists all open files and processes that are listening on port 49155
    sudo lsof -n -i :49155   
```bash

```
#### find what listens on TCP Ports
    sudo lsof -iTCP -sTCP:LISTEN -P -n
```bash

```
#### used to disable the remote login service
    sudo launchctl disable system/com.apple.remoted
```bash

```
#### List and verify that the remote login service is enable or disabled
    launchctl print system/com.apple.remoted
```bash

```
#### used to disable the Media Remote service
    sudo launchctl disable system/com.apple.mediaremoted
```bash

```
#### To list and verify that the Media Remote service is disabled
    launchctl print system/com.apple.mediaremoted
```bash

```
#### disables the XartStorage service on macOS. XartStorage is a system service that provides a variety of features, including: generating and managing thumbnails for images, videos, and other files
    sudo launchctl disable system/com.apple.xartstorage
```bash

```
#### sets your global Git username to Firstname Lastname
    git config --global user.name "Daniel IANOS"
```bash

```
#### sets your global Git email address
    git config --global user.email dan.ian3wa@gmail.com
```bash

```
#### lists all of your global Git configuration settings
    git config --global --list
```bash

```
#### generates an ECDSA SSH key pair with a comment of your choice and saves the public key to ~/.ssh/id_github.pub. The -o option tells ssh-keygen to generate an OpenSSH format key pair. The -a option specifies the number of bits to use for the key. The -t option specifies the type of key to generate. The -f option specifies the file name to save the key pair to. The -C option specifies the comment to include in the key pair.
    ssh-keygen -o -a 100 -t ecdsa -f ~/.ssh/id_github -C "dan.ian3wa@gmail.COM"
```bash

```
#### starts the SSH agent and prints the necessary environment variables to standard outpu
    eval "$(ssh-agent -s)"
```bash

```
#### adds your SSH key to the SSH agent and stores the passphrase in the macOS Keychain. This means that you will not need to enter your passphrase each time you use your SSH key
    ssh-add --apple-use-keychain ~/.ssh/id_github
```bash

```
#### copies the contents of your ~/.ssh/id_github.pub file to your clipboard
    pbcopy < ~/.ssh/id_github.pub
```bash

```
#### creates an empty file called id_github in the .ssh directory in your home directory
    touch ~/.ssh/id_github
```bash

```
#### sets the Finder to show all files, including hidden files
    defaults write com.apple.Finder AppleShowAllFiles true
```bash

```
#### Forcefully kills all running instances of the Finder application
    killall Finder
```bash

```
#### updates all of the packages that are installed with Homebrew to the latest versions
    brew upgrade
```bash

```
#### installs Homebrew on your Mac
    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
```bash

```
#### appends the following lines to the .zprofile file in the /Users/daniel directory. These lines are used to initialize the Homebrew environment variables in the zsh shell.
    (echo; echo 'eval "$(/opt/homebrew/bin/brew shellenv)"') >> /Users/daniel/.zprofile
```bash

```
#### initializes the Homebrew environment variables in the current shell session. This is necessary for using Homebrew commands
    eval "$(/opt/homebrew/bin/brew shellenv)"
```bash

```
#### install Git using Homebrew
    brew install git
```bash

```
#### install PHP using Homebrew
    brew install php
```bash

```
#### prints the version of Node.js that is installed on your system
    node -v
```bash

```
#### prints the version of npm that is installed on your system
    npm -v
```bash

```
#### install the latest version of npm globally on your system
    sudo npm install -g npm@latest
```bash

```
#### To install the Apache HTTP Server (httpd) on macOS using Homebrew
    brew install httpd
```bash

```
#### To install Composer, a dependency manager for PHP. It works by downloading the Composer installer script, verifying its integrity, and then running it.
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"\
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"\
    php composer-setup.php\
    php -r "unlink('composer-setup.php');"
```bash

```
#### installs the Symfony CLI on Unix-like systems, such as Linux and macOS
    curl -sS https://get.symfony.com/cli/installer | bash
```bash

```
#### moves the Symfony CLI binary from the user's home directory to the global /usr/local/bin directory. This makes the Symfony CLI available to all users on the system.
    sudo mv /Users/daniel/.symfony5/bin/symfony /usr/local/bin/symfony
```bash

```
#### installs the Yarn package manager globally on your system
    sudo npm install --global yarn
```bash

```
#### To check the version of npx that is installed on your system
    npx -v
```bash

```
####
    ssh -T git@github.com
```bash

```
####
    ssh -vT git@github.com
```bash

```
####
    ssh -T danian3wa@github.com
```bash

```
####
    eval "$(ssh-agent -s)"
```bash

```
####
    ssh-add -l -E ecdsa
```bash

```
####
    ssh-add -l -E sha256
```bash

```
####
    ssh -T -p 443 git@ssh.github.com
```bash

```
####
    ssh -T git@github.com
```bash

```
####
    ssh -T -p 443 git@ssh.github.com
```bash

```
####
    ssh -T danian3wa@github.com
```bash

```
####
    ssh -T git@github.com
```bash

```
####
    pbcopy < ~/.ssh/id_github.pub
```bash

```
####
    git config --global --list
```bash

```
####
    ssh-keygen -t ed25519 -C "dan.ian3wa@example.com"
```bash

```
####
    eval "$(ssh-agent -s)"
```bash

```
####
    open ~/.ssh/config
```bash

```
####
    ssh-add --apple-use-keychain ~/.ssh/id_ed25519
```bash

```
####
    pbcopy < ~/.ssh/id_ed25519.pub
```bash

```
####
    ssh -T danian3wa@github.com
```bash

```
####
    ssh -T -p 443 git@ssh.github.com
```bash

```
####
    ssh -vT git@github.com
```bash

```
####
    ssh -T danian3wa@github.com
```bash

```
####  lists all of the Python-related packages that are installed on your system using Homebrew
    brew list | grep python
```bash

```
#### command displays information about the Python formula on macOS
 ```bash

```   brew info python
```bash

```
#### displays the version of Python 3 that is installed on your system
    python3 --version
```bash

```
#### displays the version of pip3 that is installed on your system
    pip3 -V
```bash

```
#### install the requests package using pip3
    pip3 install requests
```bash

```
#### Launch inquire.py using python3
    /usr/local/bin/python3 /Volumes/PersData/Work/Programme/Python/Maltiverse/technidan/inquire.py
```bash

```
#### list all of the Python 3.11 files and directories in the current directory
    cd /usr/local/bin; ls -l | grep python3.11
```bash

```
#### enables the network interface en6 on your Mac
    sudo ifconfig en6 up
```bash

```
####
    ssh-add --apple-use-keychain ~/.ssh/id_ed25519
```bash

```
####
    sudo launchctl disable remoted
```bash

```
####
    sudo launchctl disable system/com.apple.mediaremoted
```bash

```
####
    sudo launchctl disable system/com.apple.remoted
```bash

```
####
    sudo lsof -n -i :49155
```bash

```
####
    netstat -an | grep 49155
```bash

```
####
    sudo kill -9 297
```bash

```
####
    ps aux | grep mediaremoted
```bash

```
####
    launchctl list |grep remoted
```bash

```
####
    dscl . list /Users
```bash

```
####
    sudo lsof -iTCP -sTCP:LISTEN -P -n
```bash

```
####
    sudo launchctl list com.openssh.sshd
```bash

```
#### Turns on firewall logging
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingmode on
```bash

```
####
    sudo pkill -HUP socketfilterfw
```bash

```
####
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --blockapp /usr/libexec/remoted
```bash

```
####
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getloggingopt
```bash

```
####
    sudo ifconfig en6 down
```bash

```
####
    xattr -l /Users/daniel/01_09_2023_19_34.pcapng
  ```bash

```  
#### Remove the com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m from 02_commandes_mac_os.md file
    xattr -d com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m 02_commandes_mac_os.md
```bash

```
####
    mdls  /Users/daniel/yarn.lock
```bash

```
####
    mdls  /Users/daniel/03_commandes_mysql.md
```bash

```
####
    netstat -anvp tcp | awk 'NR<3 || /LISTEN/'
```bash

```
####
    sudo mdutil -t
```bash

```
####
    sudo mdutil -t /
```bash

```
####
    sudo mdutil -a
```bash

```
#### displays the kernel routing table on Unix-like operating systems, including macOS. The routing table is used to determine how to route network traffic to its destination.
    netstat -rn
    
#### used to configure and display the status of network interfaces on Unix-like operating systems, including macOS
    ifconfig
```bash

```
####
    netstat -Watnlv | grep LISTEN | awk '{"ps -o comm= -p " $9 | getline procname;colred="\033[01;31m";colclr="\033[0m"; print cred "proto: " colclr $1 colred " | addr.port: " colclr $4 colred " | pid: " colclr $9 colred " | name: " colclr procname;  }' | column -t -s "|"\
```bash

```
#### Lists UP network interfaces 
    ifconfig -a | grep '[<,]UP[,>]' | grep -v '[<,]LOOPBACK[,>]'
```bash

```
#### Lists network connection type
    networksetup -listallnetworkservices
```bash

```
#### Lists network interfaces with mac addresses
    networksetup -listallhardwareports
```bash

```
####
```bash

```
sudo su

#### enables the macOS Application Firewall
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setglobalstate on
```bash

```
#### displays the help text for the socketfilterfw command. This command is used to manage the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw -h
```bash

```
#### enables logging for the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingmode on
```bash

```
#### outputs the current logging mode for the macOS Application Firewall
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getloggingopt
```bash

```
#### sets the logging mode for the macOS Application Firewall to "detail". This will log all firewall events in detail, including the source and destination IP addresses, ports, and protocols.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingopt detail
```bash

```
#### enables stealth mode for the macOS Application Firewall. Stealth mode makes your computer less visible to other devices on the network, which can help to reduce the risk of being attacked
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setstealthmode on
```bash

```
#### outputs the global state of the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate
```bash

```
#### outputs whether the macOS Application Firewall is configured to allow signed applications.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getallowsigned
```bash

```
#### lists all of the applications that have been granted permission to access the network through the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --listapps
```bash

```
#### enables debug mode for the macOS Application Firewall. This will log additional information about the firewall's activity, which can be helpful for troubleshooting problems with the firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw -d
```bash

```
#### clears all of the firewall rules that have been added to the macOS Application Firewall. CAUTION
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw -k

#### lists all of the firewall rules that have been added to the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw -l
```bash

```
#### blocks all incoming connections to your Mac. This can be useful for security reasons, but it can also prevent you from using some applications and services.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setblockall on
```bash

```
####
    nmap 82.78.25.240
```bash

```
####
    traceroute 82.78.25.240
```bash

```

####
    sudo nmap -sF 82.78.25.240
```bash

```
####
    sudo nmap -sU -p1-100 82.78.25.240
```bash

```
####
    sudo nmap -o 82.78.25.240
```bash

```
####
    sudo nmap -oD 82.78.25.240
```bash

```
####
    sudo nmap -Pn 82.78.25.240
```bash

```
####
    sudo nmap -D 188.27.146.115
```bash

```
####
    nmap -A 217.160.0.98
```bash

```
####
    nmap -A digi_home_22.txt 188.27.146.115
```bash

```
####
    nmap -A digihome2.txt 188.27.146.115
```bash

```
####
    nmpa -oS test.txt 217.160.0.98
```bash

```
####
    nmap -Pn digi_home_3.txt 188.27.146.115
```bash

```
####
    nmap -oB digihome2.txt 188.27.146.115
```bash

```
####
    nmap -oA digihome2.txt 188.27.146.115
```bash

```
####
    sudo pfctl -sr
```bash

```
####    
    sudo pfctl -t blockedips -T add 82.78.25.240
```bash

```
####
    sudo pfctl -f /etc/pf.conf
```bash

```
####
    sudo pfctl -t blockedips -T show
```bash

```
####
    sudo pfctl -f /etc/pf.conf.local
```bash

```
####
    sudo pfctl -s info
```bash

```
####
    sudo tcpdump -n -e -ttt -i pflog0\
```bash

```
####
    sudo pfctl -f /etc/pf.conf.local
```bash

```
####
    sudo kextload /System/Library/Extensions/pflog.kext
```bash

```
####
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate
```bash

```
####
    sudo pfctl -s info
```bash

```
####
    sudo pfctl -sa
```bash

```
#### queries the status of the pf firewall. It is equivalent to the command sudo pfctl -s info
    sudo pfctl -q
```bash

```
####
    ifconfig pflog0
```bash

```
####
    sudo pfctl -v
```bash

```
####
    sudo pfctl -e
```bash

```
####
    ifconfig pflog0
```bash

```
####
    sudo tcpdump -v -n -e -ttt -i pflog0
```bash

```