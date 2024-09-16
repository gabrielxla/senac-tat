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

    Ativar o SSH

No Debian por padrão apenas usuários podem se
conectar remotamente no servidor

putty -> ip do servidor
- autenticar como usuário
- digitar su para privilégios de root

_____________________________________________
DNS (Domain Name Server)
apt install dnsmasq
systemctl status dnsmasq
cd /etc
ls dnsmasq*
mv dnsmasq.conf dnsmasq.conf.old
vim dnsmasq.conf

    1  # LAN
    2  interface=enp0s8
    3  bind-interfaces
    4
    5  # DNS Upstream
    6  server=8.8.8.8
    7  server=8.8.4.4
    8
    9  # Bloqueio de sites (lista negra)
    10 address=/netflix.com/0.0.0.0
    11 address=/facebook.com/0.0.0.0
    10
    11 # cache
    12 cache-size=1000

salvar
systemctl restart dnsmasq

____________________________________________
Firewall
NETFILTER (configurações)

cd /etc
Arquivo de configuração dos módulos netfilter(firewall)
cp sysctl.conf sysctl.conf.old
vim sysctl.conf
28 descomentar esta linha(28) para ativar o NAT

cd /etc
ls nftables*
cp nftables.conf nftables.conf.old
vim nftables 

    1  #!/usr/sbin/nft -f
    2
    3  flush ruleset
    4
    5  table ip nat {
    6     chain postrouting {
    7         type nat hook postrouting priority 100;
    8         policy accept;
    9         oif "enp0s3" masquerade
    10    }
    11 }

salvar, reiniciar o serviço
systemctl restart nftables
systemctl status nftables
systemctl enable nftables   

Diagnóstico
systemctl status isc-dhcp-server
systemctl status dnsmasq
systemctl status nftables

ping www.google.com (debian e windows)
ping 192.168.0.1 (windows -> debian)








