num=[1,2,4,6,8]
num1=[1,2,3,4,5]

def addition(num):
 return num*2

result=map(addition,num)
result1=map(lambda x,y:x+y,num,num1)
print(list(result1))
print(list(result))