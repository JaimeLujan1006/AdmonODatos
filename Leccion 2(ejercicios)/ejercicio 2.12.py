miArchivo = open("elpoema.txt")
elTexto = miArchivo.read()
miPoemaBinario = bytes(elTexto, encoding="utf")

print(miPoemaBinario)

ascci_E = miPoemaBinario[0] #Valor ASCII del caracter E
ascci_l = miPoemaBinario[1] #Valor ASCII del caracter l

print(ascci_E)
print(ascci_l)

f = open("poema_binario.Xcosa","wb")
f.write(miPoemaBinario)
f.close()