# -*- coding: utf-8 -*-
"""
Created on Wed Oct 24 16:04:28 2018

@author: Noura
"""

import geopy.geocoders
from geopy.geocoders import Nominatim
import csv

input_file = csv.DictReader(open("Hospital-Acquired_Infections__Beginning_2008.csv"))
cv_f = input_file

coord = []
for row in cv_f:
    getAdd = row["Location 1"]
    coord.append(getAdd)
    seen = set()
    result = []
    for item in coord:        
        if item not in seen:
            seen.add(item)
            result.append(item)

    return result
g = geocoders.Google(domain='maps.google.pl')

for latLon in coord:
    

geolocator = Nominatim(user_agent="HemoSource")
location = geolocator.reverse()