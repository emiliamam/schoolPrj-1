import pymysql
import keyboard
import os.path

# считываем файл в одну строку и создаем 6 частей
while True:

    if (os.path.isfile("info.txt")):

        list = []
        # считываем файл в одну строку и создаем 6 частей
        with open("info.txt", "r") as f:
            s = f.read()
            splits = s.split()
            first_all = splits.pop(0)

            #связываемся с бд
        mydb = pymysql.connect(
            host="localhost",
            user="root",
            passwd="",
            database="info"
        )

        mycursor = mydb.cursor()

        try:
            list.append(first_all)
                # создаем таблицу
            query = "CREATE TABLE IF NOT EXISTS " + first_all + " (date DATE, time TIME , level INT(5), charge INT, temperature float(2), humidity INT(3), light INT, anxiety INT(2));"
            mycursor.execute(query)
                # заполняем столбцы
            sql_formula = "INSERT INTO " + first_all + " (date, time,level, charge, temperature, humidity, light, anxiety) VALUES(%s, %s, %s, %s, %s, %s, %s, %s)"
            user1 = (splits[0], splits[1], splits[2], splits[3], splits[4], splits[5], splits[6], splits[7])
            mycursor.execute(sql_formula, user1)
            mydb.commit()
        except pymysql.err.OperationalError:
            sql_formula = "INSERT INTO " + first_all + " (date, time,level, charge, temperature, humidity, light, anxiety) VALUES(%s, %s, %s, %s, %s, %s, %s, %s)"
            user1 = (splits[0], splits[1], splits[2], splits[3], splits[4], splits[5], splits[6], splits[7])
            mycursor.execute(sql_formula, user1)
            mydb.commit()
                #добавляем в спиоск

            #закрываем
        mycursor.close()

        os.remove("info.txt")

            #закрываем

    if keyboard.is_pressed('q'):
        break
