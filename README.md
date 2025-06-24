
#  Aniflix - DevOps Assignment ✅  
_Anime Streaming Platform - Where Entertainment Meets Engineering_

---

## 🎯 Assignment Overview
This project demonstrates a full DevOps workflow for a PHP-based anime-themed web app — including containerization, cloud deployment, automation, and AWS service integration.

---

## 🏗️ Architecture  
- **Frontend:** PHP + HTML + JS  
- **Backend:** Apache + PHP  
- **Styling:** CSS  
- **Containerization:** Docker (Apache-based)  
- **Deployment:** AWS EC2 (Ubuntu 22.04)  
- **Automation:** deploy.sh & cloud-init  
- **IAM Integration:** EC2 access to S3  

---

## 📋 Assignment Deliverables  

### ✅ 1. GitHub Repository Setup  
- Codebase pushed to GitHub  
- Version control implemented  
- Dockerfile, deploy script, cloud-init, and README present  

### ✅ 2. Dockerization  
- PHP web app containerized using `php:8.2-apache`  
- Dockerfile includes `mysqli` and `mod_rewrite`  
- App builds and runs inside a container  

```bash
docker build -t aniflix-app .
docker run -d -p 8080:80 aniflix-app
````

### ✅ 3. AWS EC2 Deployment

* EC2 instance created (Ubuntu 22.04, t2.micro)
* Docker and Git installed
* App deployed via Docker and accessed via public IP

```bash
ssh -i your-key.pem ubuntu@<EC2_IP>
git clone https://github.com/your-username/aniflix-devops.git
cd aniflix-devops
sudo docker build -t aniflix-app .
sudo docker run -d -p 80:80 aniflix-app
```

✅ Accessible at: `http://<EC2_PUBLIC_IP>`

---

## ⚙️ 4. Automation & Bonus Features

### ✅ cloud-init Setup

Automates Docker installation and deployment during EC2 boot:

```yaml
#cloud-config
package_update: true
packages:
  - docker.io
  - git
runcmd:
  - systemctl start docker
  - systemctl enable docker
  - git clone https://github.com/your-username/aniflix-devops.git /home/ubuntu/aniflix
  - cd /home/ubuntu/aniflix
  - docker build -t aniflix-app .
  - docker run -d -p 80:80 aniflix-app
```

### ✅ deploy.sh - One-click Deployment

```bash
chmod +x deploy.sh
./deploy.sh
```

Automates:

* Docker install
* Repo clone
* Container build/run
* Health checks

---

### 🔐 IAM Role + S3 Integration

* IAM Role: `AmazonS3FullAccess`
* Attached to EC2 (no hardcoded keys)
* Verified using:

```bash
aws s3 ls
```

---

## ☁️ Cloud Platform - AWS EC2

* **OS:** Ubuntu 22.04
* **Instance:** t2.micro
* **Ports Opened:** 22 (SSH), 80 (HTTP)
* **Status:** ✅ Running and Healthy
* **Security:** IAM-based access to AWS

---

## 🧪 Health Checks & Monitoring

```bash
docker ps
docker logs -f aniflix-container
docker stats aniflix-container
```

✅ Container running
✅ Port 80 reachable
✅ App responsive

---

## 🚀 Deployment Summary

✅ App containerized with Docker
✅ Deployed on EC2 with working public IP
✅ Auto-installed with `cloud-init`
✅ Auto-deployed with `deploy.sh`
✅ IAM roles for secure S3 access
✅ Fully documented with screenshots

---

## 🌐 Live App Access

Access your app:
📍 `http://<your-ec2-public-ip>`
📦 Docker Container: `aniflix-container`

---

## 🤝 Contributing

1. Fork this repo
2. Create a branch `git checkout -b feature/amazing-anime`
3. Commit changes `git commit -m 'Added Ghibli section'`
4. Push branch `git push origin feature/amazing-anime`
5. Open a Pull Request

---

## 📄 License

This project is created as part of a DevOps internship/academic assignment.

---

## 🌸 Aniflix DevOps 

## DevOps Enthusiast: Mangali Bhavya
## Bringing Anime Streaming to the Cloud ☁️🐳



