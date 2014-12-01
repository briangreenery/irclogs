VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/trusty64"

  config.vm.provider "virtualbox" do |v|
    v.customize ["modifyvm", :id, "--memory", 2048]
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
  end

  config.vm.network "forwarded_port", guest: 8000, host: 8000
  config.vm.provision "shell", path: "install.sh"
end
