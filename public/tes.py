import requests

url = "http://demo4.sasradius.com/admin/api/index.php/api/"

payload = ""
headers = {
  'Authorization': 'Bearer Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9kZW1vNC5zYXNyYWRpdXMuY29tL2FkbWluL2FwaS9pbmRleC5waHAvYXBpL2xvZ2luIiwiaWF0IjoxNTk2MDA2OTc3LCJleHAiOjE1OTYwMjg1NzcsIm5iZiI6MTU5NjAwNjk3NywianRpIjoiSTFqNklvbUFRRzI0aGpkNCJ9.HRDe_f7UiOcU93eLc2STKZdEf4SE2R-28hzCRsP69Ws'
}

response = requests.request("GET", url, headers=headers, data=payload)

print(response.text)
