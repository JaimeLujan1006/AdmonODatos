import pickle
#Abre archivo binario para leer(r) bunario(b)
archivo = open("ArchivoX.xCosa", "rb")
 
#carga datos desde archivo
datos = pickle.load(archivo)

#Muestra datos 
print(datos)

#Cierra archivo
archivo.close()