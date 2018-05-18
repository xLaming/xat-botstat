def botstat(params, values):
	if params and values: #=check if params and values are defined
		results = [] 
		for packet, value in zip(params, values):
			results.append(packet + '="' + value + '"')
		finalStr = ' '.join(results)
		return '<bs ' + finalStr + ' />' #=yeah, it works
	else: #=nope, its wrong
		return False
	

'''
a is Avatar,
n is Nickname,
s is Status,
h is Homepage
'''
packets = {'n', 'a'} 

'''
All values should be added there
'''
values = {'My name is Laming', '158'}

'''
Calling the function
'''
callItBaby = botstat(packets, values)
print(callItBaby)

'''
Result would be like:
<bs n="My name is Laming" a="158" />
'''
