## GPOS
1. Evite que o Windows armazene o LM Hash
O Windows gera e armazena senhas de contas de usuários em “hashes”. O Windows gera um hash do LAN Manager (LM hash) e um hash do Windows NT (NT hash) de senhas. Ele os armazena no banco de dados local do SAM (Security Accounts Manager) ou no Active Directory.

Execute as seguintes etapas para evitar que o Windows armazene o hash do gerenciador de LAN:

1) Navegue até “Configuração do Computador”/ “Configurações do Windows”/ “Configurações de Segurança”/ “Políticas Locais”/ “Opções de Segurança”.

2) No painel direito, clique duas vezes em “Segurança de rede: não armazenar o valor de hash do LAN Manager na próxima alteração de senha”.

3) Marque a caixa de seleção “Definir esta configuração de política” e clique em “Ativado”.

4) Clique em “Aplicar” e “OK”.

2. Defina a idade máxima da senha
Execute os seguintes passos: para alterar esta configuração:

01) Navegue até “Configuração do Computador”, “Configurações do Windows”, “Configurações de Segurança”, “Diretivas de Conta”, “Diretiva de Senha”.

02) No painel direito, clique duas vezes na diretiva “Duração máxima da senha”.

03) Marque a caixa de seleção “Definir esta configuração de política” e especifique um valor.

04) Clique em “Aplicar” e “OK”.

3. Não permitir unidades de mídia removível, DVDs, CDs.
As unidades de mídia removível são muito propensas a infecções e também podem conter um vírus ou malware. Para bloquear o acesso a unidades de mídias removíveis faça o seguinte:

1) Navegue até “Configuração do Usuário”, “Políticas”, “Modelos Administrativos”, “Sistema”, “Acesso a Armazenamento Removível”.

2) No painel direito, clique duas vezes em “Todas as classes de armazenamento removíveis: negar todos os acessos”

3) Clique em “Ativado” para ativar a política.

4) Clique em “Aplicar” e “OK”.

4. Restringir instalações de software
Quando você dá aos usuários a liberdade de instalar softwares em suas estações, eles podem instalar aplicativos indesejados que comprometem seu sistema. Para restringir essas instalações crie a seguinte política de grupo:

1) Navegue até “Configuração do Computador”, “Modelos Administrativos”, “Componente do Windows”, “Windows Installer”.

2) No painel direito, clique duas vezes na política “Proibir instalação do usuário”.

3) Clique em “Ativado” para ativar a política

4) Clique em “Aplicar” e “OK”.

5. Desabilite a conta de convidado
Por meio de uma conta de convidado, os usuários podem obter acesso a dados confidenciais. Essas contas concedem acesso a um computador Windows e não exigem senha. Para garantir que estas contas estejam desativadas crie a seguinte política de grupo:

1) Navegue até “Configuração do Computador”, “Configurações do Windows”, “Configurações de Segurança”, “Políticas Locais”, “Opções de Segurança”.

2) No painel direito, clique duas vezes na política “Contas: status da conta de convidado”.

3) Marque a caixa de seleção “Definir esta configuração de política” e clique em “Desativado”.

4) Clique em “Aplicar” e “OK”.

6. Desativar enumeração de SID anônima
O Active Directory atribui um número exclusivo a todos os objetos de segurança no Active Directory; incluindo Usuários, Grupos e outros, chamados números de identificadores de segurança (SID). Nas versões mais antigas do Windows, os usuários podiam consultar os SIDs para identificar usuários e grupos importantes. Garanta que a enumeração de SID anônima esteja desativada através da seguinte política de grupo:

1) Navegue até “Configuração do Computador”, “Políticas”, “Configurações do Windows”, “Configurações de Segurança”, “Políticas Locais”, “Opções de Segurança”.

2) No painel direito, clique duas vezes em configuração de diretiva “Acesso à rede: não permitir enumeração anônima de contas e compartilhamentos SAM”.

3) Marque a caixa de seleção “Definir esta configuração de política” e clique em “Desativar” para desativá-la.

4) Clique em “Aplicar” e “OK”.

7. Bloqueio de conta apos 3 tentativas
) Navegue até “Configuração do Computador”, “Políticas”, “Configurações do Windows”, “Configurações de Segurança”, “Políticas de conta”, “Politicas de bloqueio de conta”.
Limite de bloqueio de conta
ativar

8. DESATIVAR o windows defender(apresentação)
Navegue até “Configuração do Computador”, “Políticas”, “Modelos administrativos”, “Componentes Windows”, “Windows defender”,
desativar o windows defender
