

# Aniflix – Dockerized Anime Web App Deployment

Aniflix is a PHP-based anime-themed web application. This project demonstrates how to containerize it using Docker and deploy it on an AWS EC2 instance with automation using shell scripts and cloud-init.

---

## 🔧 Technologies Used
- PHP + Apache
- Docker
- AWS EC2 (Ubuntu 22.04)
- Git
- IAM + S3 (optional)

---

## 📁 Project Structure

```

Aniflix/
├── index.php
├── handlers/
├── media/
├── scripts/
├── Dockerfile
├── deploy.sh
├── cloud-init.yaml
├── README.md

````

---

## 🚀 Run Locally with Docker

```bash
git clone https://github.com/your-username/aniflix-devops.git
cd aniflix-devops
docker build -t aniflix-app .
docker run -d -p 8080:80 aniflix-app
````

Open: [http://localhost:8080](http://localhost:8080)

---

## ☁️ Deploy on AWS EC2 (Manual)

1. Launch Ubuntu EC2
2. Open ports 22 (SSH) and 80 (HTTP)
3. SSH into EC2:

```bash
ssh -i your-key.pem ubuntu@<EC2_PUBLIC_IP>
```

4. Install Docker and Git:

```bash
sudo apt update
sudo apt install docker.io git -y
```

5. Clone repo and run app:

```bash
git clone https://github.com/your-username/aniflix-devops.git
cd aniflix-devops
sudo docker build -t aniflix-app .
sudo docker run -d -p 80:80 aniflix-app
```

Open: `http://<EC2_PUBLIC_IP>`

---

## ⚙️ deploy.sh (Automated Setup)

```bash
chmod +x deploy.sh
./deploy.sh
```

---

## ⚡ cloud-init (Auto-run on EC2 boot)

Paste this `cloud-init.yaml` in EC2 → Advanced Settings → User Data while launching instance.

---

## 🔐 IAM Role for S3 (Optional)

* Attach a role with `AmazonS3FullAccess`
* Run:

```bash
aws s3 ls
```

---

## ✅ Done!


![image](https://github.com/user-attachments/assets/38ad8f2f-59f1-4f2a-8355-c6a2bab3d8a9)


