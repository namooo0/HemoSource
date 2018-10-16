#!/usr/bin/env python3

#This is a script that will take csv and take out hospitals names to put
#into the database

import csv
import random

input_file = csv.DictReader(open("Hospital-Acquired_Infections__Beginning_2008.csv"))
cv_f = input_file
'''hosName finally gets all hospital names
   need to get only one copy of each'''

'''
    program is goin through and adding albany, next hospital, alb, next hos
    other hos, alb
    ugh
'''
hosNames = []
for row in cv_f:
    getShit = row["Hospital Name"]
    #print(getShit)
    hosNames.append(getShit)
    #print(getShit)
    #print(hosNames) #WORKS!!!!
    seen = set()
    result = []
    for item in hosNames:
        
        if item not in seen:
            seen.add(item)
            result.append(item) + runrun

runrun = random.sample(range(75, 1000), 8)

with open('listOfNames.txt', 'w') as f:
	for item in result:
		f.write("%s'n" % item)