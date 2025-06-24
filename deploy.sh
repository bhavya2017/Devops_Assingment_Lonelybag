#!/bin/bash
set -e

echo "[1/4] Updating packages..."
sudo apt update

echo "[2/4] Installing Docker and Git..."
sudo apt install -y docker.io git

echo "[3/4] Cloning repo..."
if [ ! -d ~/aniflix ]; then
  git clone https://github.com/bhavya-17/Devops_Assignment_Lonelybag.git ~/aniflix
fi

cd ~/aniflix

echo "[4/4] Building and running Docker container..."
sudo docker build -t aniflix-app .
sudo docker stop aniflix-container || true
sudo docker rm aniflix-container || true
sudo docker run -d -p 80:80 --name aniflix-container aniflix-app

echo "✅ Deployment successful!"
