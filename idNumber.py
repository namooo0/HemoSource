import random, string

result = []

for i in range(400):
    if result != 3:
        s = ''.join(random.choices(string.ascii_uppercase + string.digits, k=18))
        result.append(s)

        print(s)

##with open('IDcodes.txt', 'w') as f:
##	for item in result:
##		f.write("%s\n" % item)
