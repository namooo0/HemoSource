#!/usr/bin/env python3

#This is a script that will take csv and take out hospitals names to put
#into the database

import csv

input_file = csv.DictReader(open("Hospital-Acquired_Infections__Beginning_2008.csv"))
cv_f = input_file
'''hosName finally gets all hospital names
   need to get only one copy of each'''


hosNames = []
for row in cv_f:
    getShit = row["Hospital Name"]
    hosNames.append(getShit)
    #print(getShit)
    #print(hosNames) #WORKS!!!!
    seen = set()
    result = []
    for item in hosNames:
        if item not in seen:
            seen.add(item)
            result.append(seen)

print(result)
#print(hosNames)

