#!/usr/bin/env python3

#This is a script that will take csv and take out hospitals names to put
#into the database

import csv

"""input_file = csv.DictReader(open("Hospital-Acquired_Infections__Beginning_2008.csv"))

#set will turn things into dictionary

for row in input_file:
    hosName = row["Hospital Name"]
    #trueList is a list of all hospital names
    trueList = hosName

    print(trueList)
"""
f = open('Hospital-Acquired_Infections__Beginning_2008.csv')
csv_f = csv.reader(f)

hosNames = []
for row in csv_f:
    hosNames.append(row[2])

    seen = set()
    result = []
    for item in hosNames:
        seen.add(item)
        result.append(item)
    print(result)


#print(hosNames)
