#!/bin/bash

set -euo pipefail

# Retrieve authenticatable details
http --session=session -f POST http://localhost:8000/api/authenticatable/retrieve email=email@email.com

# Send login verification
http --session=session -f POST http://localhost:8000/api/authenticatable/login_verification email=email@email.com password=password url=http://localhost:8000/verifications locale=en session_id=11111111111111111111111111111111111111111111111111

# User login
http --session=session -f POST http://localhost:8000/api/authenticatable/login email=email@email.com password=password session_id=11111111111111111111111111111111111111111111111111

# Get current authenticatable details
http --session=session -f GET http://localhost:8000/api/authenticatable/current

# Logout from current device
http --session=session -f POST http://localhost:8000/api/authenticatable/logout_current_device

# Logout from other devices
http --session=session -f POST http://localhost:8000/api/authenticatable/logout_other_devices password=password

# Logout from all devices
http --session=session -f POST http://localhost:8000/api/authenticatable/logout_all_devices password=password

# Send email verification
http --session=session -f POST http://localhost:8000/api/authenticatable/email_verification email=new@email.com url=http://localhost:8000/verifications locale=en session_id=11111111111111111111111111111111111111111111111111

# Register a new account
http --session=session -f POST http://localhost:8000/api/authenticatable/register email=new@email.com password=password locale=en session_id=11111111111111111111111111111111111111111111111111

# Send account deletion verification
http --session=session -f POST http://localhost:8000/api/authenticatable/delete_verification url=http://localhost:8000/verifications locale=en session_id=11111111111111111111111111111111111111111111111111

# Delete user account
http --session=session -f POST http://localhost:8000/api/authenticatable/delete password=password session_id=11111111111111111111111111111111111111111111111111

# Update account details
http --session=session -f POST http://localhost:8000/api/authenticatable/update locale=en

# Send credentials update verification
http --session=session -f POST http://localhost:8000/api/authenticatable/credentials_update_verification url=http://localhost:8000/verifications locale=en session_id=11111111111111111111111111111111111111111111111111

# Update account credentials
http --session=session -f POST http://localhost:8000/api/authenticatable/credentials_update email=updated@email.com password=password session_id=11111111111111111111111111111111111111111111111111

# Send password reset verification
http --session=session -f POST http://localhost:8000/api/authenticatable/password_reset_verification email=email@email.com url=http://localhost:8000/verifications locale=en session_id=11111111111111111111111111111111111111111111111111

# Reset account password
http --session=session -f POST http://localhost:8000/api/authenticatable/password_reset password=password session_id=11111111111111111111111111111111111111111111111111

# Send password update verification
http --session=session -f POST http://localhost:8000/api/authenticatable/password_update_verification url=http://localhost:8000/verifications locale=en session_id=11111111111111111111111111111111111111111111111111

# Update account password
http --session=session -f POST http://localhost:8000/api/authenticatable/password_update password=password new_password=password session_id=11111111111111111111111111111111111111111111111111

# Invalidate current session
http --session=session -f POST http://localhost:8000/api/sessions/invalidate

# Regenerate session ID
http --session=session -f POST http://localhost:8000/api/sessions/regenerate

# Retrieve verification details
http --session=session -f GET http://localhost:8000/api/verifications/show verification_id==$(read -p "Enter verification_id: " && echo ${REPLY})

# Complete verification process
http --session=session -f POST http://localhost:8000/api/verifications/complete verification_id=$(read -p "Enter verification_id: " && echo ${REPLY}) token=$(read -p "Enter token: " && echo ${REPLY})
