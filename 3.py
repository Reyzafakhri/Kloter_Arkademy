#nomor 3
def singkatan(s):
    a = ""
    for kata in s:
        if kata in s.upper():
            a += kata
   
    return a
print(singkatan("Negara Kesatuan Republik Indonesia"))
print(singkatan("JAwa TIMur"))




        
    
