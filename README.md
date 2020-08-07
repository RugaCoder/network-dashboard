# Nagios Dashboard
A clean and simple overview of your Nagios environment optimized for the system adminstratos  displays. 

I designed this dashboard **For my Final Year project** as a way to have quick visibility into the health of the Nagios environment from a TV mounted on the wall in our public space - or on a tablet on your desk. It offers a color coded system which helps stand out any troubles that are going on and automatic background updates mean you don't have to constantly refresh the page.

![alt text](http://i.imgur.com/BmZ4CxB.jpg "Nagios Dashboard")

![alt text](http://i.imgur.com/3rRqL51.png "Nagios Dashboard - All clear")

![alt text](http://i.imgur.com/hxQxzkQ.png "Nagios Dashboard - All acknowledged or OK")

## Requirements
* You need to have a working installation of MK LiveStatus for this dashboard to work. MK LiveStatus is available as a package on many Linux distributions for easy installation.
* Apache
* Apache mod_rewrite module if you wish to use the Team Filtering (see below)
* PHP 5.3.3 or newer

## Focused on alerts
* Any host or service in trouble will show on the dashboard /*
   Nagios Operations Dashboard
   Description: Displays a quick glance overview of the environment. Requires MK Livestatus.
   Version: config.php -> DASHBOARD_VERSION
   */
* If there are any active troubles, and acknowledged troubles, the top banner will only focus on those which have not been acknowledged
* If a host is OK, it will not show on the dashboard
* If a host has notifications disabled, it will not show on the dashboard
* Separation of active versus acknowledged for a quick glance on what troubles need to be focused on

## Background AJAX updates
Set it and forget it. The dashboard will constantly refresh the body content with new alerts. Default is 5 seconds, but it is configurable. 

## Team filtering
The dashboard is also hostgroup aware. If you have multiple teams that use your Nagios system, group their items into a hostgroup and give them the URL for their items ( e.g. https://coict.ac.tz/nagios/ops/hostgroup/ ). Each team can have their own wall display, or monitor/tablet which shows them only the items they are responsible for. 

## Mobile responsive design
You can check the dashboard from your mobile devices, the design will change to try and fit everything in. 


## License
Licensed under the University of Dar es salaam regulations and licenses as it is the work for partila fullfilment for the award of Bsc in Telecommunications Engineering 

