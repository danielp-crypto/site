-- Create registrations table for dashboard.php
CREATE TABLE IF NOT EXISTS registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    surname VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: Add indexes for better performance
CREATE INDEX idx_created_at ON registrations(created_at);
CREATE INDEX idx_phone ON registrations(phone);
