enable
 show vlan brief
  configure terminal
    vlan 10
    name switch
    exit
    vlan 20
    name server
    exit
    vlan 30
    name wireless
    exit
    vlan 40
    name estoque
    exit
    vlan 50
    name financeiro
    exit
    vlan 60
    name gerencia
    exit
  end
write 
show vlan brief

VLAN Name                             Status    Ports
---- -------------------------------- --------- -------------------------------
1    default                          active    Gig1/0/1, Gig1/0/2, Gig1/0/3, Gig1/0/4
                                                Gig1/0/5, Gig1/0/6, Gig1/0/7, Gig1/0/8
                                                Gig1/0/9, Gig1/0/10, Gig1/0/11, Gig1/0/12
                                                Gig1/0/13, Gig1/0/14, Gig1/0/15, Gig1/0/16
                                                Gig1/0/17, Gig1/0/18, Gig1/0/19, Gig1/0/20
                                                Gig1/0/21, Gig1/0/22, Gig1/0/23, Gig1/0/24
                                                Gig1/1/1, Gig1/1/2, Gig1/1/3, Gig1/1/4
2    VLAN0002                         active    
10   switch                           active    
20   server                           active    
30   wireless                         active    
40   estoque                          active    
50   financeiro                       active    
60   gerencia                         active    
1002 fddi-default                     active    
1003 token-ring-default               active    
1004 fddinet-default                  active    
1005 trnet-default                    active

configure terminal
    interface vlan 10
    description interface SVI Switch 3650
    ip address  192.168.10.252 255.255.255.0
    no shutdown
    end
end
