#### command history is a list of all the commands that you have run in the terminal
    history

#### clears the terminal screen
    clear

#### In the curent folder it create a file name liste.txt and write the name of files and directories in it.
    ls >> liste.txt

#### In the curent folder it create a file name liste2.txt and write the name of files, folders, subfolders, hiden files with size permision, owner in time order in it.
    ls -R -lat >> liste2.txt

#### Show the curent network status details
    netstat -Watnlv | grep LISTEN | awk '{"ps -o comm= -p " $9 | getline procname;colred="\033[01;31m";colclr="\033[0m"; print cred "proto: " colclr $1 colred " | addr.port: " colclr $4 colred " | pid: " colclr $9 colred " | name: " colclr procname;  }' | column -t -s "|"

#### kills (stop) the process with the pid number 588
    kill -9 588 

#### Show the curent network status details
    sudo lsof -PiTCP -sTCP:LISTEN

#### Show the curent network status details
    netstat -anvp tcp | awk 'NR<3 || /LISTEN/'

#### Show group access status details
    dscl . -read /Groups/admin | grep GroupMembership 

#### Show php processes
    ps -ef | grep php    

#### start the Apache HTTP Server 
    sudo apachectl start

#### stop the Apache HTTP Server 
    sudo apachectl stop

#### il faut verifier chatGpt command
    netstat -vanp tcp | grep Google\Chrome   

#### List all running processes
    ps

#### list all running processes, along with their CPU and memory usage
    ps -o pid,user,cpu,mem

#### List all running processes on a macOS system, including those that do not have a controlling terminal. This is in contrast to the ps command by itself, which only lists processes that have a controlling terminal.
    ps -x

#### List all processes owned by the current user
    ps -u $USER

#### List all processes running the "chrome" command
    ps -C chrome

#### List all processes with a PID greater than 1000
    ps -p 1000

####  all of user daniel’s processes:
    ps -u daniel

####  all occurrences of a program:
    ps -axc | grep -w xCode

#### processes on terminal ttys000:
    ps -ts000

#### particular processes 1, 2, and 3505:
    ps -p1,2,3505

#### and all processes and their threads:
    ps -axM

#### gives the current value of the max socket buffer size
    sysctl -a|grep maxsockbuf

#### traceroute Google DNS
    traceroute 8.8.8.8

#### show ports list 
    lsof -nP +c 15 | grep LISTE

#### AirDrop in reglage systeme ON et OFF  https://developer.apple.com/forums/thread/682332  lisen on port 5000 et 7000 -> Récepteur AirPlay off configured to mac mini 02/07/2023

#### shows the routing table
    netstat -rn

#### shows hidden files on in macos Finder
    defaults write com.apple.Finder AppleShowAllFiles true

#### This output indicates that there is a TCP socket listening on port 49155. The socket is in the LISTEN state, which means that it is waiting for connections from other hosts
    netstat -an | grep 49155

#### lists all open files and processes that are listening on port 49155
    sudo lsof -n -i :49155   

#### find what listens on TCP Ports
    sudo lsof -iTCP -sTCP:LISTEN -P -n

#### used to disable the remote login service
    sudo launchctl disable system/com.apple.remoted

#### List and verify that the remote login service is enable or disabled
    launchctl print system/com.apple.remoted

#### used to disable the Media Remote service
    sudo launchctl disable system/com.apple.mediaremoted

#### To list and verify that the Media Remote service is disabled
    launchctl print system/com.apple.mediaremoted

#### disables the XartStorage service on macOS. XartStorage is a system service that provides a variety of features, including: generating and managing thumbnails for images, videos, and other files
    sudo launchctl disable system/com.apple.xartstorage

#### sets your global Git username to Firstname Lastname
    git config --global user.name "Daniel IANOS"

#### sets your global Git email address
    git config --global user.email dan.ian3wa@gmail.com

#### lists all of your global Git configuration settings
    git config --global --list

#### generates an ECDSA SSH key pair with a comment of your choice and saves the public key to ~/.ssh/id_github.pub. The -o option tells ssh-keygen to generate an OpenSSH format key pair. The -a option specifies the number of bits to use for the key. The -t option specifies the type of key to generate. The -f option specifies the file name to save the key pair to. The -C option specifies the comment to include in the key pair.
    ssh-keygen -o -a 100 -t ecdsa -f ~/.ssh/id_github -C "dan.ian3wa@gmail.COM"

#### starts the SSH agent and prints the necessary environment variables to standard outpu
    eval "$(ssh-agent -s)"

#### adds your SSH key to the SSH agent and stores the passphrase in the macOS Keychain. This means that you will not need to enter your passphrase each time you use your SSH key
    ssh-add --apple-use-keychain ~/.ssh/id_github

#### copies the contents of your ~/.ssh/id_github.pub file to your clipboard
    pbcopy < ~/.ssh/id_github.pub

#### creates an empty file called id_github in the .ssh directory in your home directory
    touch ~/.ssh/id_github

#### sets the Finder to show all files, including hidden files
    defaults write com.apple.Finder AppleShowAllFiles true

#### Forcefully kills all running instances of the Finder application
    killall Finder

#### updates all of the packages that are installed with Homebrew to the latest versions
    brew upgrade

#### installs Homebrew on your Mac
    /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

#### appends the following lines to the .zprofile file in the /Users/daniel directory. These lines are used to initialize the Homebrew environment variables in the zsh shell.
    (echo; echo 'eval "$(/opt/homebrew/bin/brew shellenv)"') >> /Users/daniel/.zprofile

#### initializes the Homebrew environment variables in the current shell session. This is necessary for using Homebrew commands
    eval "$(/opt/homebrew/bin/brew shellenv)"

#### install Git using Homebrew
    brew install git

#### install PHP using Homebrew
    brew install php

#### prints the version of Node.js that is installed on your system
    node -v

#### prints the version of npm that is installed on your system
    npm -v

#### install the latest version of npm globally on your system
    sudo npm install -g npm@latest

#### To install the Apache HTTP Server (httpd) on macOS using Homebrew
    brew install httpd

#### To install Composer, a dependency manager for PHP. It works by downloading the Composer installer script, verifying its integrity, and then running it.
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"\
    php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"\
    php composer-setup.php\
    php -r "unlink('composer-setup.php');"

#### installs the Symfony CLI on Unix-like systems, such as Linux and macOS
    curl -sS https://get.symfony.com/cli/installer | bash

#### moves the Symfony CLI binary from the user's home directory to the global /usr/local/bin directory. This makes the Symfony CLI available to all users on the system.
    sudo mv /Users/daniel/.symfony5/bin/symfony /usr/local/bin/symfony

#### installs the Yarn package manager globally on your system
    sudo npm install --global yarn

#### To check the version of npx that is installed on your system
    npx -v

####
    ssh -T git@github.com

####
    ssh -vT git@github.com

####
    ssh -T danian3wa@github.com

####
    eval "$(ssh-agent -s)"

####
    ssh-add -l -E ecdsa

####
    ssh-add -l -E sha256

####
    ssh -T -p 443 git@ssh.github.com

####
    ssh -T git@github.com

####
    ssh -T -p 443 git@ssh.github.com

####
    ssh -T danian3wa@github.com

####
    ssh -T git@github.com

####
    pbcopy < ~/.ssh/id_github.pub

####
    git config --global --list

####
    ssh-keygen -t ed25519 -C "dan.ian3wa@example.com"

####
    eval "$(ssh-agent -s)"

####
    open ~/.ssh/config

####
    ssh-add --apple-use-keychain ~/.ssh/id_ed25519

####
    pbcopy < ~/.ssh/id_ed25519.pub

####
    ssh -T danian3wa@github.com

####
    ssh -T -p 443 git@ssh.github.com

####
    ssh -vT git@github.com

####
    ssh -T danian3wa@github.com

####  lists all of the Python-related packages that are installed on your system using Homebrew
    brew list | grep python

#### command displays information about the Python formula on macOS
    brew info python

#### displays the version of Python 3 that is installed on your system
    python3 --version

#### displays the version of pip3 that is installed on your system
    pip3 -V

#### install the requests package using pip3
    pip3 install requests

#### Launch inquire.py using python3
    /usr/local/bin/python3 /Volumes/PersData/Work/Programme/Python/Maltiverse/technidan/inquire.py

#### list all of the Python 3.11 files and directories in the current directory
    cd /usr/local/bin; ls -l | grep python3.11

#### enables the network interface en6 on your Mac
    sudo ifconfig en6 up

####
    ssh-add --apple-use-keychain ~/.ssh/id_ed25519

####
    sudo launchctl disable remoted

####
    sudo launchctl disable system/com.apple.mediaremoted

####
    sudo launchctl disable system/com.apple.remoted

####
    sudo lsof -n -i :49155

####
    netstat -an | grep 49155

####
    sudo kill -9 297

####
    ps aux | grep mediaremoted

####
    launchctl list |grep remoted

####
    dscl . list /Users

####
    sudo lsof -iTCP -sTCP:LISTEN -P -n

####
    sudo launchctl list com.openssh.sshd

#### Turns on firewall logging
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingmode on

####
    sudo pkill -HUP socketfilterfw

####
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --blockapp /usr/libexec/remoted

####
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getloggingopt

####
    sudo ifconfig en6 down

####
    xattr -l /Users/daniel/01_09_2023_19_34.pcapng
    
#### Remove the com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m from 02_commandes_mac_os.md file
    xattr -d com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m 02_commandes_mac_os.md
    
####
    mdls  /Users/daniel/yarn.lock
    
####
    mdls  /Users/daniel/03_commandes_mysql.md

####
    netstat -anvp tcp | awk 'NR<3 || /LISTEN/'
    
####
    sudo mdutil -t
    
####
    sudo mdutil -t /
    
####
    sudo mdutil -a
    
#### displays the kernel routing table on Unix-like operating systems, including macOS. The routing table is used to determine how to route network traffic to its destination.
    netstat -rn
    
#### used to configure and display the status of network interfaces on Unix-like operating systems, including macOS
    ifconfig

####
    netstat -Watnlv | grep LISTEN | awk '{"ps -o comm= -p " $9 | getline procname;colred="\033[01;31m";colclr="\033[0m"; print cred "proto: " colclr $1 colred " | addr.port: " colclr $4 colred " | pid: " colclr $9 colred " | name: " colclr procname;  }' | column -t -s "|"\

#### Lists UP network interfaces 
    ifconfig -a | grep '[<,]UP[,>]' | grep -v '[<,]LOOPBACK[,>]'

#### Lists network connection type
    networksetup -listallnetworkservices

#### Lists network interfaces with mac addresses
    networksetup -listallhardwareports

####
sudo su

#### enables the macOS Application Firewall
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setglobalstate on

#### displays the help text for the socketfilterfw command. This command is used to manage the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw -h

#### enables logging for the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingmode on

#### outputs the current logging mode for the macOS Application Firewall
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getloggingopt

#### sets the logging mode for the macOS Application Firewall to "detail". This will log all firewall events in detail, including the source and destination IP addresses, ports, and protocols.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingopt detail

#### enables stealth mode for the macOS Application Firewall. Stealth mode makes your computer less visible to other devices on the network, which can help to reduce the risk of being attacked
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setstealthmode on

#### outputs the global state of the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate

#### outputs whether the macOS Application Firewall is configured to allow signed applications.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getallowsigned

#### lists all of the applications that have been granted permission to access the network through the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --listapps

#### enables debug mode for the macOS Application Firewall. This will log additional information about the firewall's activity, which can be helpful for troubleshooting problems with the firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw -d

#### clears all of the firewall rules that have been added to the macOS Application Firewall. CAUTION
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw -k

#### lists all of the firewall rules that have been added to the macOS Application Firewall.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw -l

#### blocks all incoming connections to your Mac. This can be useful for security reasons, but it can also prevent you from using some applications and services.
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setblockall on

####
    nmap 82.78.25.240

####
    traceroute 82.78.25.240


####
    sudo nmap -sF 82.78.25.240

####
    sudo nmap -sU -p1-100 82.78.25.240

####
    sudo nmap -o 82.78.25.240

####
    sudo nmap -oD 82.78.25.240

####
    sudo nmap -Pn 82.78.25.240

####
    sudo nmap -D 188.27.146.115

####
    nmap -A 217.160.0.98

####
    nmap -A digi_home_22.txt 188.27.146.115

####
    nmap -A digihome2.txt 188.27.146.115

####
    nmpa -oS test.txt 217.160.0.98

####
    nmap -Pn digi_home_3.txt 188.27.146.115

####
    nmap -oB digihome2.txt 188.27.146.115

####
    nmap -oA digihome2.txt 188.27.146.115

####
    sudo pfctl -sr

####    
    sudo pfctl -t blockedips -T add 82.78.25.240

####
    sudo pfctl -f /etc/pf.conf

####
    sudo pfctl -t blockedips -T show

####
    sudo pfctl -f /etc/pf.conf.local

####
    sudo pfctl -s info

####
    sudo tcpdump -n -e -ttt -i pflog0\

####
    sudo pfctl -f /etc/pf.conf.local

####
    sudo kextload /System/Library/Extensions/pflog.kext

####
    sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate

####
    sudo pfctl -s info

####
    sudo pfctl -sa

#### queries the status of the pf firewall. It is equivalent to the command sudo pfctl -s info
    sudo pfctl -q

####
    ifconfig pflog0

####
    sudo pfctl -v

####
    sudo pfctl -e

####
    ifconfig pflog0

####
    sudo tcpdump -v -n -e -ttt -i pflog0