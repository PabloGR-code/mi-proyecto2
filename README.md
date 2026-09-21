El área de trabajo es la carpeta donde abres tus archivos y escribes tu código cada día.   Ahí puedes hacer todos los cambios, pruebas y borrados que quieras sin guardar nada todavía.   El área de preparación es como una caja o carrito donde pones solo las fotos o archivos que ya tienes listos.   Pasas los archivos a esta área usando el comando git add.   Te sirve para revisar y organizar bien lo que vas a guardar antes de confirmarlo en el historial definitivo con git commit.   

Para ver las diferencias entre el área de preparación y el último commit, usa este comando:   Bashgit diff --staged
Muestra exactamente las líneas que has añadido con git add y que se guardarán en tu próximo commit
