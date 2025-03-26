WonderCMS 3.5 kom ut, så jag börjar mina redigeringar från den versionen nu. Men test 1, 2, 3 var hjälpsamma ändå.

Jag jobbar nu lokalt med xampp.

Det var lite besvärligt att försöka dela upp alla funktioner i v1, så jag struntar i det.
Ska se om jag kan justera det utan att plocka isär hela klassen / ändra så lite som möjligt.

Lösenord för detta test: cE1IwMNt
(så länge databasen inte raderas och skapas igen)

Att Göra
[x] för över landik temat från test3.
[x] ta in admin som lokala filer istället för cdn.
[x] byt wcms-admin.js/Css till icke-minifierade versioner, finns på wondercms github.
[x] ta bort onödiga saker som GitHub-uppdatering, temabyte och plugins i settings-modalen
[x] flytta upp tema-filer en nivå, eftersom man inte behöver byta teman längre behöver de inte vara i en undermapp....
[x] döp om Menu i settings-modal till General / Allmänt.
[x] flytta in blocks under specifika sidor i database.js -> pages -> blocks...
[x] klura ut hur man kan skapa block objekt i databas.json baserat på sidmallen,om de inte finns redan.

- verkar lite krångligt att få summernote att funka, men kanske kan göra något med editable-blocken som är enklare än summernote och min idé ovanför...
-- kan nog ta innehållet av blocket när de klickar på det, sätta det i ett formulär, låta användaren göra sitt, sätter tillbaka koden i blocket och spara det.   
-- på så vis sparas block som en html-sträng på backend, men på front-end ser de ut som fina input-element.
--- fick till det ganska OK... Men har inte löst nestade taggar, eller a och img attribut.
--- behöver snygga till submitknappen så den inte tar styling från förälder, kanske ge fält en titel om de är i formulär-läge. 
--- Jag borde kunna göra en lösning med contenteditable=true istället för formulär... I alla fall för block där jag redigerar innerhtml, kanske inte a.
--- har löst det nu så enkla texttaggar har contenteditable på sitt innerhtml och skickas med onblur, och avancerade taggar som img får ett formulär med varje attribut och en submit-knapp.
--- kan kanske göra något med autosize på textarea storlekar i formulär-läget, den ursprungliga lösningen använde det.

[x] ta bort type från block() funktionen nu när jag inte använder det, så mina block-taggar i layouts blir kortare...

[x] Skapa en mapp för sidmallar i tema-mappen och ändra så sidorna laddar layout därifrån och data från database.json. loadThemeAndFunctions()
[x] gör det möjligt för användaren att byta sidmall i settingsmodalen "current page"
[x] När en sida skapas genom att gå till en 404-url som admin skapas två menyobjekt.. varför?.. Fixat. Skapa okänd sida kördes för varje block i en sidladdning.

- skapa en blogg med archive / post templates och egen posts.js databas, basera på simpleBlog plugin.
- förbättra det svenska översättningspluginet
- fixa alerts så de inte täcken menyn längre
- gör settingsmodalen tydligare/lättare att använda
- klura ut redigering av sidnamn i settingsmodalens meny, det ändrar i databasen just nu, sidnamnet är en key under pages... 
- varför är menuItems del av config i databasen? bör de inte vara ett steg upp, precis som pages? 

- lägg upp filerna på github så jag kan hålla koll och inte skriver över något jag ändrat med orginalfunktionerna igen...



####

- installera användbara plugins och se hur de fungerar...
- skapa eget plugin för blogg/custom post type
- simple-statistics fatal error på bloggsida (längst ner)?
-
- klura ut redigering av block med flera fält (htmx? forms?)
- klura ut rendering av block med flera fält (component fil?)
- 
- Gör det enkelt för användare att skapa nya sidor baserat på theme.php (standard Wondercms)
- Gör det enkelt för användare att skapa nya sidor baserat på mall.php (valbara sidmallar)
-- kan ha en dropdown i Current Page fliken av SettingsModalen som ändrar innehållet av pageName.js
-
- Fortsätt med init-blocks från test2?
- Rensa upp onödiga funktioner i index.php?