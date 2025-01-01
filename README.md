- [Docker](https://www.docker.com/) (Docker Desktop for Windows)
- [Docker Compose](https://docs.docker.com/compose/install/) (if not included in your Docker installation)

### Steps to Run the Application

1. **Clone the Repository**
   ```bash
   git clone <repository-url>
   cd <repository-folder>
   ```

2. **Copy the Environment File**
   Create a `.env` file by copying the example file provided in the repository:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with the appropriate configuration values as needed.

3. **Build and Start the Containers**
   Use Docker Compose to build and start the application containers:
   ```bash
   docker-compose up --build -d
   ```
   This will:
   - Build the Docker images defined in the `docker-compose.yml` file.
   - Start the application services.

4. **Access the Application**
   Once the containers are running, you can access the application in your browser at:
   ```
   http://localhost
   ```
   Replace `<laravel.test>` with the port specified in the `docker-compose.yml` file (e.g., `80`, `8080`, etc.).

### Managing the Application

- **Stop the Containers**
  To stop the application, press `CTRL+C` in the terminal running Docker Compose or run:
  ```bash
  docker-compose down
  ```

- **Rebuild the Containers**
  If you make changes to the Dockerfile or dependencies, rebuild the containers:
  ```bash
  docker-compose up --build
  ```

- **View Logs**
  To view logs from the containers, run:
  ```bash
  docker-compose logs -f
  ```
