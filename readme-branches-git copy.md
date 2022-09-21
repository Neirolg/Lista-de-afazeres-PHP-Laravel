# Criar uma nova branch (local:origin) a partir da atual
git checkout -b dev
git checktou -b feature-teste1

# Fazer merge da branch atual (local:origin) para a dev:
git push origin feature-button-teste:dev

# Fazer merge da branch atual (local:origin) para a main:
git remote -v
git push origin feature-button-teste:dev

# muda para a branch dev
git checkout dev 

# muda para a branch main
git checkout main

# Fazer um merge da branch remota (github.com:main) --> atual 
git pull origin feature-button-teste
git pull origin dev
git pull origin main


# Caso 1 

### O luis está trabalhando na feature_teste1, e quer mandar suas atualizacoes para a dev

ele faz o seguinte:
1) git branch feature_teste1 (ou seja ele se posiciona na branch de trabalho que deseja fazer merge para a dev)
2) git add . && git commit -m "atualizacoes" 
3) git push origin feature_teste1:dev 


### o kelvin está na main, e quer fazer um merge da dev para main

1) git branch main
2) git pull origin dev 


### O ronald vai gerar uma release para fazer deploy

1) git branch main
2) git checktou -b release-1.2
3) git push origin release-1.2 


### fazer o deploy

4) git push heroku release-1.2:main 












