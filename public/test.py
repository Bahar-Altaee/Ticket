import netmiko
import sys
import json
import time
HOST = sys.argv[1]

from netmiko import ConnectHandler

net_connect = ConnectHandler(
    device_type="cisco_ios",
    host=HOST,
    username="admin",
    password="e7admin",
)

output = net_connect.send_command("show ont unassigned detail")

print (output) 
