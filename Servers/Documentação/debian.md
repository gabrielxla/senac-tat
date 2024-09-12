## Comandos básicos:

    clear OU  ctrl+L (limpar a tela) 
    shutdown -h now (deligar o servidor)
    apt update (atualizar o repositório)
    apt install vim (instalar o editor de textos)
    pwd (verificar o diretório atual)
    reboot (reiniciar o servidor)
    exit (deslogar)

____________________________________________
Personalização do servidor:
1)     apt install linuxlogo
2)     cd /etc  (etc diretório de configurações no Linux)
3)     ls issue* (issue é o arquivo de configuração de tela de login no Linux)
4)     Fazer um backup do issue (cp issue issue.bkp)
5)     Remover o arquivo issue (rm issue)
6)     Renomear o arquivo issue (cp issue.linuxlogo issue) 

____________________________________________
Configuração da rede (cenário)

    cd /etc/network
    cp interfaces interfaces.old
    vim interfaces

#adicionar no fim do script

    # LAN
    allow hotplug enp0s8
    iface enp0s8 inet static
    address 192.168.0.1/24

salvar e reiniciar o serviço de rede

    systemctl restart networking

______________________________________________
Configuração do serviço DHCP (Servidor de IPs)

    apt update
    apt install isc-dhcp-server

    ip link show (verificar as interfaces de rede)

1) Configurar a interface LAN para o DHCP

        cd /etc/default
 # fazer uma cópia do arquivo de configuração
        cp isc-dhcp-server isc-dhcp-server.old

    vim isc-dhcp-server
    INTERFACES="enp0s8" (verificar antes a interface)

2) Configurar o script

        cd /etc/dhcp
# fazer uma cópia do arquivo de configuração
    cp dhcpd.conf dhcpd.conf.old

    vim dhcpd.conf

    7 Mudar o domíno para localhost
    8 Setar o ip do dns 192.168.0.1

    35 subnet 192.168.0.0 netmask 255.255.255.0 {
    36   range 192.168.0.100 192.168.0.200;
    37   option routers 192.168.0.1;
    38 }

    salvar e reiniciar o serviço
    systemctl restart isc-dhcp-server
    systemctl status isc-dhcp-server


