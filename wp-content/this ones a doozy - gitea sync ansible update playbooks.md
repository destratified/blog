goals:
1. setup ansible in lxc on proxmox
2. figure out how the fuck to use it!
3. work backwards and forwards and back again on setup of folder heirarchy
4. make folders into a git repo (gitea for me)
5. sync everything
6. nano hosts file, ansible.cfg
7. build out playbooks for each system [arch], [ubuntu] and [PVE,PVB-pvs], figure out ssh, and ssh-copy-id, sshd_config and what the fuck works for passwords and not - still stuck with a password in the ansible.cfg
8. make a comprehensive update-all.yml playbook for a cron job
9. do a buncha bit work putting all the sshd_configs back to #PermitRootLogin password_disabled - maybe I can write a playbook for that!

# so here it goes:
the ansible lxc creation was probably the easiest of all these things to do.  i setup a new lxc container with the usual specs:
