import requests

#set the url for an api endpoint
baseURL = "https://randomuser.me/api"

#get the data

response = requests.get(baseURL)

if(response.status_code==200):
 data = response.json()
 print(data)
else:
 print("no data", data.status_code)
