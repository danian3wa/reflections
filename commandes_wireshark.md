# Wireshark Commands

## Best practice -> maximum packet file size captured by Wireshark is 1 GByte

#### in Wireshark filter packages to and from IP address 8.8.8.8
	
```bash
ip.addr==8.8.8.8
```

#### in Wireshark filter packages from source 8.8.8.8 IP address
	
```bash
ip.src==8.8.8.8
```

#### in Wireshark filter packages to destination 8.8.8.8 IP address
	
```bash
ip.dst==8.8.8.8
```

#### in Wireshark Menu -> Statistics -> Endpoint -> IPv4 Tab -> chose 8.8.8.8 IP -> right click -> Apply as filter -> Selected

```bash
ip.addr==8.8.8.8
```

#### in Wireshark filter packages to and from 8.8.8.0/24 IP address will filter on all 8.8.8.0 IPs (1..255)

```bash
ip.addr==8.8.8.0/24
```

#### in Wireshark filter packages with tcp protocol (works with other protocols like udp, arp, dns, http, mdns, quic, tls, ntp, nbns, cdp, ldp, lldp, cdp )

```bash
tcp
```

#### in Wireshark filter packages with http protocol (works with other protocols like udp, arp, dns, http, mdns, quic, tls, ntp, nbns, cdp, ldp, lldp, cdp)

```bash
http
```

#### in Wireshark filter packages with tcp protocol on port 80 (works with other protocols like udp, arp, dns, http, mdns, quic, tls, ntp, nbns, cdp, ldp, lldp, cdp )

```bash
tcp.port == 80
```

#### in Wireshark filter packages with tcp protocol on port 80 (works with other protocols like udp, arp, dns, http, mdns, quic, tls, ntp, nbns, cdp, ldp, lldp, cdp )

```bash
tcp.port eq 80
```

#### in Wireshark filter packages with tcp protocol different from port 80 (is not port 80) (works with other protocols like udp, arp, dns, http, mdns, quic, tls, ntp, nbns, cdp, ldp, lldp, cdp )

```bash
tcp.port != 80
```

#### in Wireshark filter packages with tcp protocol on ports 80 443 8000 8001

```bash
tcp.port == 80 or tcp.port == 443 or tcp.port == 8000 or tcp.port == 8001
```

#### in Wireshark filter packages with tcp protocol on ports 80 443 8000 8001

```bash
tcp.port in {80, 443, 8000..8005}
```

#### in Wireshark filter packages with tcp protocol on ports 40000 to 65535

```bash
tcp.port in {40000..65535}
```

#### in Wireshark Menu Statistics -> Conversation -> TCP Tab -> right click on the IP address -> Selected -> A <-> B will filter the conversation 

```bash
ip.addr==10.10.10.2 && tcp.port==52000 && ip.addr==8.8.4.4 && tcp.port==52521
```

#### in Wireshark right click on a packet -> Follow -> TCP Stream 

```bash
tcp.stream eq 28340
```

#### in Wireshark right click on a packet -> Conversation Filter -> TCP 

```bash
(ip.addr eq 8.8.4.4 and ip.addr eq 10.10.10.2) and (tcp.port eq 443 and tcp.port eq 49316)
```

#### in Wireshark filter packages with tcp or dns protocol

```bash
tcp or dns
```

#### in Wireshark filter packages with tcp and dns protocols

```bash
tcp and dns
```

#### in Wireshark filter packages with a string

```bash
ip contains "London"
```

#### in Wireshark filter packages with a string allows case insensitive

```bash
eth matches "London"
```

#### in Wireshark filter packages with a string (anything encapsulating in eth)

```bash
eth matches "GOOGLE"
```

#### get rid of arp stp lldp cdp ... after Menu -> File -> Export Specified Packets... -> give a name to the new file -> you can choose a number of packages to save -> Range 100 - 1000 -> Save

```bash
!(arp or stp or lldp or cdp or eth.addr==ff:ff:ff:ff:ff:ff or dns or tcp.port in {443, 80})
```

#### in Wireshark filter packages shows all the flags

```bash
tcp.analysis.flags
```

#### in Wireshark filter packages shows all the flags but not the window updates
	
```bash
(tcp.analysis.flags) && !(tcp.analysis.window_update)
```

#### in Wireshark filter packages with dns then click on replay packet (with return arrow), and right click on \[ Time: 0.009293000 seconds \] -> Apply as Column

```bash
dns
```

#### drag the \[ Time: 0.009293000 seconds \] in the command bar if neccesary change the value of Time: with 0.2 -> Selected and change == with > and then click + on the right of the command bar and in Label: type Slow DNS -> OK

```bash
dns.time > 0.2
```

#### in Wireshark filter packages shows all resets

```bash
tcp.flags.reset==1
```

#### With MaxMind databases installed in wireshark click on a packet and then in Internet Protocol -> Source GeoIP -> right click on -> Source GeoIP City -> Prepare as Filter -> Selected

```bash
ip.geoip.src_city == "Paris"
```

#### With MaxMind databases installed in wireshark click on a packet and then in Internet Protocol -> Source GeoIP -> right click on -> Source GeoIP Country -> Prepare as Filter -> Selected and type a ! in front of the command ip.geoip.src_country == "France", will show everything else there is not from France

```bash
!ip.geoip.src_country == "France"
```

#### in Terminal with this command search for dns txt query in a wireshark captured packets file

```bash
tshark -r 09_10_2023_03_16.pcapng -Y dns.txt -T fields -e dns.txt
```

####  [Source YouTube -> David Bombal -> Top 10 Real World Wireshark Filters you need to know](https://youtu.be/26MAaX2ldnI?si=RSSXkoWKuiUPhsFQ)

#### [Source YouTube -> Chris Greer](https://www.youtube.com/c/ChrisGreer)

