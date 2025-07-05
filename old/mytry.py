from pynput import mouse, keyboard

# Initialize the keyboard controller
keyboard_controller = keyboard.Controller()

def on_click(x, y, button, pressed):
    if button == mouse.Button.right and pressed:
        # Simulate pressing the "Down" key
        keyboard_controller.press(keyboard.Key.down)
        keyboard_controller.release(keyboard.Key.down)
        # Simulate pressing the "Enter" key
        keyboard_controller.press(keyboard.Key.enter)
        keyboard_controller.release(keyboard.Key.enter)

def main():
    try:
        # Start the mouse listener
        with mouse.Listener(on_click=on_click) as listener:
            print("Listening for right-click events. Press Ctrl+C to stop.")
            listener.join()  # This keeps the program running
    except KeyboardInterrupt:
        print("\nExiting program...")

if __name__ == "__main__":
    main()
