# Apple macOS Useful Terminal Commands

This document categorizes useful macOS terminal commands.

## I. File and Directory Management

* **`history`**: Lists all commands run in the current terminal session.
* **`pwd`**: Prints the current working directory.
* **`clear`**: Clears the terminal screen.
* **`cd Documents`**: Changes the working directory to the "Documents" folder.
* **`cd ..`**: Changes the working directory to the parent directory.
* **`ls`**: Lists files and directories in the current working directory.
* **`ls -l`**: Lists files and directories with details (permissions, size, etc.).
* **`ls -a`**: Lists all files and directories, including hidden ones.
* **`ls -h`**: Lists files and directories with human-readable sizes (KB, MB, etc.).
* **`ls -lh`**: Combines long listing format with human-readable sizes.
* **`mkdir "New folder"`**: Creates a new directory named "New folder" (note the quotes for spaces).
* **`touch new_file.txt`**: Creates an empty file named "new_file.txt".
* **`rm my_file.txt`**: Removes (deletes) the file "my_file.txt".
* **`rm -f my_file.txt`**: Removes the file "my_file.txt" forcefully (without confirmation).
* **`rm -r "My folder"`**: Removes the directory "My folder" and its contents recursively (use with caution!).
* **`sed -i s/world/world./g README.md`**: Replaces "world" with "world." in "README.md".
* **`sed -i s/world/world\!/g README.md`**: Replaces "world" with "world!" in "README.md" (escaping the '!').
* **`ls >> liste.txt`**: Appends the output of `ls` to the file "liste.txt".
* **`ls -R -lat >> liste2.txt`**: Appends a detailed, recursive, long listing to "liste2.txt".


## II. Process Management

* **`ps`**: Lists currently running processes.
* **`ps -o pid,user,cpu,mem`**: Lists processes with PID, user, CPU, and memory usage.
* **`ps -x`**: Lists all processes, including those without controlling terminals.
* **`ps -u $USER`**: Lists processes owned by the current user.
* **`ps -C chrome`**: Lists processes running the "chrome" command.
* **`ps -p 1000`**: Lists the process with PID 1000.  (Note: this should be a comma-separated list of PIDs, not a range.)
* **`ps -u jhon`**: Lists all processes of user "jhon".
* **`ps -axc | grep -w xCode`**: Lists all occurrences of a program matching "xCode".
* **`ps -ts000`**: Lists processes on terminal ttys000.
* **`ps -p1,2,3505`**: Lists processes with PIDs 1, 2, and 3505.
* **`ps -axM`**: Lists all processes and their threads.
* **`kill -9 588`**: Sends a SIGKILL signal (forcefully terminates) process with PID 588.  (Use with extreme caution!)


## III. Network Management

* **`netstat -Watnlv | grep LISTEN | awk '{...}' | column -t -s "|"`**: Displays listening network sockets with detailed information (colorized output).
* **`sudo lsof -PiTCP -sTCP:LISTEN`**: Shows details of listening TCP sockets.
* **`netstat -anvp tcp | awk 'NR<3 || /LISTEN/'`**: Shows TCP network status (listening sockets).
* **`traceroute 8.8.8.8`**: Traces the route to 8.8.8.8 (Google DNS).
* **`netstat -an | grep 49000`**: Shows network connections related to port 49000.
* **`sudo lsof -n -i :49000`**: Lists open files and processes listening on port 49000.
* **`sudo lsof -iTCP -sTCP:LISTEN -P -n`**: Finds what's listening on TCP ports.
* **`netstat -rn`**: Shows the routing table.
* **`sudo lsof -nP +c 15 | grep LISTE`**:  This command seems incomplete or contains errors.  `+c 15` is unusual within `lsof`.
* **`netstat -vanp tcp | grep Google\Chrome`**:  Finds processes related to Google Chrome.  The backslash escapes the space in "Google Chrome,"  but this might be unreliable for detecting all Chrome processes.


## IV. System Configuration and Services

* **`/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"`**: Installs Homebrew.
* **`(echo; echo 'eval "$(/opt/homebrew/bin/brew shellenv)"') >> /Users/username/.zprofile`**: Adds Homebrew to your shell profile (replace `/Users/username` with your username).
* **`eval "$(/opt/homebrew/bin/brew shellenv)"`**: Loads Homebrew environment variables into the current shell.
* **`brew install git`**: Installs Git using Homebrew.
* **`brew install php`**: Installs PHP using Homebrew.
* **`brew services start php`**: Starts the PHP services managed by Homebrew.
* **`ps -ef | grep php`**: Shows PHP processes.
* **`brew install httpd`**: Installs Apache HTTP Server using Homebrew.
* **`sudo apachectl start`**: Starts Apache.
* **`sudo apachectl stop`**: Stops Apache.
* **`dscl . -read /Groups/admin | grep GroupMembership`**: Shows group access status (specifically for the admin group).
* **`sudo launchctl disable system/com.apple.remoted`**: Disables remote login.
* **`launchctl print system/com.apple.remoted`**: Checks the status of remote login.
* **`sudo launchctl disable system/com.apple.mediaremoted`**: Disables Media Remote.
* **`launchctl print system/com.apple.mediaremoted`**: Checks the status of Media Remote.
* **`sudo launchctl disable system/com.apple.xartstorage`**: Disables XartStorage (thumbnail generation service).
* **`ssh-keygen -o -a 100 -t ecdsa -f ~/.ssh/id_github -C "jhon.doe@gmail.COM"`**: Generates an ECDSA SSH key pair.
* **`eval "$(ssh-agent -s)"`**: Starts the SSH agent.
* **`ssh-add --apple-use-keychain ~/.ssh/id_github`**: Adds an SSH key to the keychain.
* **`pbcopy < ~/.ssh/id_github.pub`**: Copies the public key to the clipboard.
* **`touch ~/.ssh/id_github`**: Creates an empty SSH key file (this should probably be avoided, as it's creating an insecure empty file).
* **`brew upgrade`**: Upgrades all Homebrew packages.
* **`node -v`**: Shows Node.js version.
* **`npm -v`**: Shows npm version.
* **`sudo npm install -g npm@latest`**: Installs the latest npm globally.
* **`php -r "..."`**: This is a multi-line command to install Composer.  The command is correct, but could be improved with more descriptive comments.
* **`curl -sS https://get.symfony.com/cli/installer | bash`**: Installs the Symfony CLI.
* **`sudo mv /Users/username/.symfony5/bin/symfony /usr/local/bin/symfony`**: Moves the Symfony CLI to a global location (replace with your username).
* **`sudo npm install --global yarn`**: Installs Yarn globally.
* **`npx -v`**: Shows npx version.
* **`ssh-add -l -E ecdsa`**: Lists SSH keys in the agent using ECDSA.
* **`ssh-add -l -E sha256`**: Lists SSH keys in the agent using SHA256.
* **`ssh -T -p 443 git@ssh.github.com`**: Tests SSH connection to GitHub (port 443).
* **`ssh -T git@github.com`**: Tests SSH connection to GitHub.
* **`ssh -T jhondoe@github.com`**: Tests SSH connection to GitHub with a specific username.
* **`git config --global --list`**: Lists global Git config settings.
* **`ssh-keygen -t ed25519 -C "jhondoe@example.com"`**: Generates an Ed25519 SSH key pair.
* **`open ~/.ssh/config`**: Opens the SSH config file.
* **`ssh -vT git@github.com`**: Tests SSH connection to GitHub with verbose output.
* **`defaults write com.apple.Finder AppleShowAllFiles true`**: Shows hidden files in Finder.
* **`killall Finder`**: Kills all Finder processes (restart Finder to see the effect of the previous command).

## V. Python and Package Management

* **`brew list | grep python`**: Lists Python-related Homebrew packages.
* **`brew info python`**: Shows information about the Python Homebrew formula.
* **`python3 --version`**: Shows Python 3 version.
* **`pip3 -V`**: Shows pip3 version.
* **`pip3 install requests`**: Installs the `requests` package.
* **`cd /usr/local/bin; ls -l | grep python3.11`**: Lists files related to Python 3.11 in `/usr/local/bin`.  (This path may vary depending on your Python installation).
* **`pip3 install -r requirements.txt`**: Installs packages listed in `requirements.txt`.


## VI.  Network Interfaces and Firewalls

* **`sudo ifconfig en6 up`**: Enables the `en6` network interface.
* **`sudo ifconfig en0 down`**: Disables the `en0` network interface.
* **`sudo networksetup -setv6off Ethernet`**: Disables IPv6 on Ethernet.
* **`sudo networksetup -setnetworkserviceenabled "Wi-Fi" off`**: Disables the Wi-Fi network service.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setglobalstate on`**: Enables the Application Firewall.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw -h`**: Shows help for the Application Firewall command-line tool.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingmode on`**: Enables Application Firewall logging.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getloggingopt`**: Gets Application Firewall logging options.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setloggingopt detail`**: Sets Application Firewall logging to "detail".
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setstealthmode on`**: Enables stealth mode in the Application Firewall.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getglobalstate`**: Gets the global state of the Application Firewall.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --getallowsigned`**: Checks if the Application Firewall allows signed apps.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --listapps`**: Lists apps allowed by the Application Firewall.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw -d`**: Enables debug mode for the Application Firewall.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw -k`**: Clears all Application Firewall rules (use with extreme caution!).
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw -l`**: Lists Application Firewall rules.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --setblockall on`**: Blocks all incoming connections.
* **`sudo pkill -HUP socketfilterfw`**: Reloads the Application Firewall configuration.
* **`sudo /usr/libexec/ApplicationFirewall/socketfilterfw --blockapp /usr/libexec/remoted`**: Blocks a specific application (remoted).


## VII. Packet Filter (PF)

* **`sudo pfctl -sr`**: Shows the current PF rules.
* **`sudo pfctl -t blockedips -T add 216.163.128.20`**: Adds an IP to the "blockedips" PF table.
* **`sudo pfctl -f /etc/pf.conf`**: Reloads PF rules from `/etc/pf.conf`.
* **`sudo pfctl -t blockedips -T show`**: Shows the "blockedips" PF table.
* **`sudo pfctl -f /etc/pf.conf.local`**: Reloads PF rules from `/etc/pf.conf.local`.
* **`sudo pfctl -s info`**: Shows PF information.
* **`sudo tcpdump -n -e -ttt -i pflog0`**: Captures packets from the pflog0 interface.
* **`sudo kextload /System/Library/Extensions/pflog.kext`**: Loads the PF logging kernel extension.
* **`sudo pfctl -sa`**: Shows all PF rules and configurations.
* **`sudo pfctl -q`**: Shows PF status (brief).
* **`sudo pfctl -v`**: Shows the PF version.
* **`sudo pfctl -e`**: Enables the PF firewall.
* **`sudo pfctl -s rules`**: Shows the current PF rules.


## VIII. Metadata and Spotlight

* **`xattr -l /Users/username/file.txt`**: Lists extended attributes of a file (replace `/Users/username/file.txt` with your file path).
* **`xattr -d com.apple.metadata:kMDLabel_kruuibmgmssh6ixqtqvlyipf7m commandes_mac_os.md`**: Removes a specific extended attribute from a file.
* **`mdls /Users/username/file.txt`**: Displays metadata of a file (replace `/Users/username/file.txt` with your file path).
* **`sudo mdutil -t`**: Rebuilds the Spotlight index.
* **`sudo mdutil -t /`**: Checks the Spotlight index on the root volume.
* **`sudo mdutil -a`**: Starts or stops Spotlight indexing for all volumes.


## IX.  Miscellaneous

* **`xcode-select --install`**: Installs Xcode command-line tools.
* **`/Applications/Xcode.app/Contents/Developer/usr/bin/python3 -m pip install --upgrade pip`**: Upgrades pip for Xcode's Python. (The path might need adjustment depending on your Xcode installation).
* **`sudo su`**: Switches to the root user (use with caution!).
* **`brew install portaudio`**: Installs portaudio using Homebrew.
* **`brew install ffmpeg`**: Installs ffmpeg using Homebrew.
* **`pip3 install PyAudio==0.2.13`**: Installs PyAudio.
* **`pip3 install GoogleBard==0.0.7`**: Installs GoogleBard.
* **`pip3 install playsound==1.2.2`**: Installs playsound.
* **`pip3 install SpeechRecognition==3.10.0`**: Installs SpeechRecognition.
* **`pip3 install openai_whisper==20230314`**: Installs openai_whisper.
* **`pip3 install pyttsx3==2.90`**: Installs pyttsx3.


## X. Network Scanning (Nmap)

* **`nmap 216.163.128.20`**: Performs a basic Nmap scan.
* **`sudo nmap -sF 216.163.128.20`**: Performs a TCP FIN scan.
* **`sudo nmap -sU -p1-100 216.163.128.20`**: Performs a UDP scan of ports 1-100.
* **`sudo nmap -o scan_results.txt 216.163.128.20`**: Saves the scan results to a file.
* **`sudo nmap -oD 216.163.128.20`**: Saves results in a greppable format.
* **`sudo nmap -oG 216.163.128.20`**: Saves results in a simplified greppable format.
* **`grep '/open/' scan_results.txt`**: Extracts open ports from the scan results.
* **`sudo nmap -Pn 216.163.128.20`**: Skips host discovery.
* **`sudo nmap -D 192.168.1.2,192.168.1.3,192.168.1.4 216.163.128.20`**: Uses decoy IPs.
* **`nmap -A 216.163.128.20`**: Performs an aggressive scan.
* **`nmap -A -iL net_home.txt > scan_results.txt`**: Scans multiple hosts from a file.
* **`nmap -A -iL net_home.txt >> scan_results.txt`**: Appends scan results to an existing file.
* **`nmap -oA digihome.txt 216.163.128.20`**: Saves scan results in multiple formats (normal, XML, greppable).
* **`nmap -p- 216.163.128.20`**: Scans all ports.
* **`traceroute 216.163.128.20`**: Traces the route to an IP address.


**Note:**  Always exercise caution when using commands like `sudo`, `kill -9`, `rm -rf`, and commands that modify system configurations or firewall settings. Incorrect usage can lead to data loss or system instability.  Double-check your commands before executing them, especially those with `sudo`.  Back up important data regularly.