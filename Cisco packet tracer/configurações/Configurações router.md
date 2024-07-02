**Comandos Terminal**

**!(Configuração do router)**
lan, wan, nome, protocolo de roteamento e salvar
    
    enable
    configure terminal
    hostname SP
    interface fastEthernet 0/0 (LAN)
    ip add 192.168.10.1 255.255.255.0
    no shutdown
    description Porta Lan de SP
    exit
    
    interface s0/0 (WAN)
    no shutdown
    ip add 20.0.0.1 255.0.0.0
    description Porta wan que liga SP ao RJ
    clock rate 128000
    bandwidth 128
    exit
    
    router rip (Protocolo de Roteamento)
    network 20.0.0.0
    network 192.168.10.0
    end
    copy run star
