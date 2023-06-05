# Base image
FROM node:14-alpine AS builder

# Set the working directory
WORKDIR /app

# Copy package.json and package-lock.json
COPY package.json package-lock.json ./

# Install dependencies
RUN npm install

# Copy the source code
COPY . .

# Build the React app
RUN npm run build

# Use the official WordPress image as the base image
FROM wordpress:latest

# Copy the built React app into the WordPress container
COPY --from=builder /app/build/ /var/www/html/wp-content/themes/my-theme/

# Set up WordPress configuration
COPY wp-config.php /var/www/html/

# Expose port 80 for the WordPress container
EXPOSE 80

# Start Apache web server
CMD ["apache2-foreground"]
