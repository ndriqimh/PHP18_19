# PI18_19

Projekti nga lënda Programim në Internet,pjesa e serverit.

## Parakushtet

Projekti duhet te shkarkohet ose te klonohet.

### Përdorimi

Ne dosjen **PHPprojekti** gjendet e gjith faqja(projekti) i punuar.Aty gjenden faqet kryesore,faqet ndihmëse dhe disa skedarë që plotësojnë këto faqe.

### Faqet kryesore

```
-Shtëpia
-Sporti
-Shkenca
-Kultura
-Loja
-Rreth
-Gjera

```
#### Faqet ndihmëse(dytësore)

```
-Regjistrohu.php
-Futu.php
-AjaxDB.php

```
#### Databaza
Databaza është tek skedari **regjistrimi.sql**. Duhet të merret ose të krijohet ne phpMyAdmin.Nëse krijohet atherë:
Emri i databazes duhet të jetë **regjistrimi**,krijohet tabela me emër **perdoruesit**, ku `id` e duhet të jetë **PRIMARY KEY** dhe `email` **UNIQUE** si më poshtë.
```sql
CREATE TABLE `perdoruesit` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
)
ALTER TABLE `perdoruesit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`); 
``` 

#### Kontribuesit

* Ndriçim Hajrullahu
* Muhamed Zahiri
* Ndriqim Muhadri

Për më shumë shikoni ne linkun [Kontribuesit](https://github.com/ndriqimh/PI18_19_Gr7/graphs/contributors)










