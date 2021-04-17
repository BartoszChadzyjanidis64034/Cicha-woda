# Cicha-woda
Projekt zespołowy

Projekt został stworozny przy wykorzystaniu HTML, CSS, PHP oraz bazy danych MySQL.
Projekt stworzono i sprawdzano przy użyciu oprogramowania XAMPP.

Po zainstalowaniu środowiska XAMPP, odpalamy usługi Apache oraz MySQL, po przejściu na stronę "27.0.0.1/phpmyadmin" tworzymy nową bazę danych o nazwie test_db.
Po utworzeniu bazy danych, przechodzimy do niej, wybieramy wykonywanie zapytań SQL i wklejamy całą zawrtość, która znajduje się w pliku "baza danych/baza.sql", a następnie klikamy "wykonaj". Po wykoanniu zapytania tworzy się tabela o nazwie "users", w której będą przechowywani zarejestrowani użytkownicy.
Po wykonaniu powyższego kroku pzechodzimy do katalogu XAMPP i znajdujemy folder "htdocs". Pobrane pliki z repozytorium rozpakowujemy i katalog o nazwie "projekt zespołowy", przenosimy do folderu "htdocs". Odpalamy przeglądarkę i wpisujemy adres "127.0.0.1/projekt_zespolowy". W tej chwili, otworzy nam się strona głóna naszej aplikacji, gdzie możemy się zalogować, jeśli posiadamy konto. Jeśli takiego nie posiadamy, można przejść do procesu rejestracji. Po pomyślnym przejściu rejestracji, możemy zalogować się do naszej aplikacji, za pomocą nowo utworzonego konta.
Po pomyślnym zalogowaniu, ukazuje się nam nasz to-do list, do którego każdy z użytkowników, z osobna, może dodawać zadania do zrobienia, do bazy oraz usuwać je, co usunie je z bazy, jeśli któreś z nich zostało zrobione. Po całym procesie, można się wylogować, klikając w opcję "Wyloguj". Przenosi nas to do strony głównej, gdzie możemy się ponownie zalogować, bądź utworzyć nowe konto.
Dla konkretnego użytkownika, przy rejestracji, na podstawie nazwy użytkownika, tworzona jest tabela, do której możemy dodawać i usuwać z niej zadania. To nam pozwala na to, aby każdy zarejestrowany użytkownik widział tylko i wyłącznie swoje zadania.

![image](https://user-images.githubusercontent.com/62951876/115112423-ce90e080-9f85-11eb-8b35-613c6b564824.png)
![image](https://user-images.githubusercontent.com/62951876/115112454-ec5e4580-9f85-11eb-8896-95daf3f902f0.png)
![image](https://user-images.githubusercontent.com/62951876/115112471-fc762500-9f85-11eb-9f81-191368bebab4.png)
![image](https://user-images.githubusercontent.com/62951876/115112486-0b5cd780-9f86-11eb-8aaf-b3d9d92340bf.png)
![image](https://user-images.githubusercontent.com/62951876/115112500-1adc2080-9f86-11eb-8c43-888d13c69cef.png)
![image](https://user-images.githubusercontent.com/62951876/115112512-2596b580-9f86-11eb-8772-7594d7257e38.png)
![image](https://user-images.githubusercontent.com/62951876/115112528-36dfc200-9f86-11eb-9344-8c03bd59c0df.png)
![image](https://user-images.githubusercontent.com/62951876/115112543-4959fb80-9f86-11eb-8537-d97998407634.png)


