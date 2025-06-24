# Aniflix – DevOps Assignment: Dockerize & Deploy

## Overview
Containerized a PHP-based anime web app ("Aniflix") using Docker, deployed on AWS EC2, automated with cloud-init and deploy.sh, and configured AWS IAM role for S3 access.

## Repo Contents
- `Dockerfile` – builds PHP/Apache web image
- `deploy.sh` – shell script to install Docker and deploy app
- `cloud-init.yaml` – auto-installs Docker and deploys on EC2 boot
- `index.php`, `handlers/`, `media/`, etc. – web app code

---

## Local Docker Setup

```bash
git clone https://github.com/your-username/aniflix-devops.git
cd aniflix-devops
docker build -t aniflix-app .
docker run -d -p 8080:80 --name aniflix-container aniflix-app
