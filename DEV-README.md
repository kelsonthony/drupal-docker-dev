# drupal-docker
drupal-docker

## Repo Reference

https://github.com/drupal-composer/drupal-project

composer create-project drupal-composer/drupal-project:9.x-dev some-dir --no-interaction

clone https://github.com/wodby/docker4drupal

rm -R docker4drupal/.git
rm docker4drupal/docker-compose.override.yml
cp -R docker4drupal/ docker_drupal

firewall-cmd --permanent --add-port=1025/tcp
firewall-cmd --permanent --add-port=8025/tcp


docker-compose up -d