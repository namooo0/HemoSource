import random, string

result = []

for i in range(30):
    if result != 3:
        s = ''.join(random.choices(string.ascii_uppercase + string.digits, k=18))
        result.append(s)

with open('IDcodes.txt', 'w') as f:
	for item in result:
		f.write("%s\n" % item)