import tkinter as tk
from tkinter import filedialog
import pyperclip
import keyboard
import pyautogui
import time

class URLAutomation:
    def __init__(self, root, click_position):
        self.root = root
        self.root.title("URL Automation")

        # File path entry and Browse button
        self.file_path_var = tk.StringVar()
        tk.Label(root, text="Select URL File:").pack(pady=5)
        file_entry = tk.Entry(root, textvariable=self.file_path_var, width=40)
        file_entry.pack(pady=5)
        
        browse_button = tk.Button(root, text="Browse", command=self.browse_file)
        browse_button.pack(pady=5)

        # Control buttons
        self.continue_button = tk.Button(root, text="Continue", command=self.continue_task, state="disabled")
        self.continue_button.pack(pady=10)
        
        self.terminate_button = tk.Button(root, text="Terminate", command=self.terminate_task)
        self.terminate_button.pack(pady=10)

        self.urls = []
        self.url_index = 0
        self.click_position = click_position

    def browse_file(self):
        file_path = filedialog.askopenfilename(filetypes=[("Text files", "*.txt")])
        if file_path:
            self.file_path_var.set(file_path)
            self.load_urls(file_path)
            self.continue_button.config(state="normal")  # Enable "Continue" button once file is loaded

    def load_urls(self, file_path):
        # Load URLs from the specified file
        try:
            with open(file_path, 'r') as file:
                self.urls = [line.strip() for line in file if line.strip()]
            self.url_index = 0
            print(f"Loaded {len(self.urls)} URLs.")
        except Exception as e:
            print(f"Error loading file: {e}")

    def continue_task(self):
        # If there are URLs left, copy the next URL to the clipboard
        if self.url_index < len(self.urls):
            url = self.urls[self.url_index]
            pyperclip.copy(url)  # Copy URL to clipboard
            print(f"Copied to clipboard: {url}")
            self.url_index += 1
            
            self.paste_url()
        else:
            print("No more URLs.")
            self.root.quit()

    def paste_url(self):
        # Move to the specified screen position and click to focus on the box
        pyautogui.click(self.click_position)
        time.sleep(0.5)  # Wait for focus

        # Clear any existing text by pressing Ctrl+A (Select All) and then Delete
        keyboard.press_and_release("ctrl+a")
        time.sleep(0.1)
        keyboard.press_and_release("delete")

        keyboard.write(pyperclip.paste())  # Paste the URL
        print("URL pasted successfully.")

    def terminate_task(self):
        print("Terminating program.")
        self.root.quit()

# Run the program
if __name__ == "__main__":
    time.sleep(1)
    click_position = (296, 63)  # Replace with the x, y position of the box on the screen

    root = tk.Tk()
    app = URLAutomation(root, click_position)
    
    # Listen for Enter key press to trigger the "Continue" button action
    keyboard.add_hotkey("shift", app.continue_task)
    
    root.mainloop()
