import tkinter as tk
from tkinter import ttk

# Conversion functions
def convert_length(value, from_unit, to_unit):
    conversions = {
        ("meters", "kilometers"): value / 1000,
        ("kilometers", "meters"): value * 1000,
        ("miles", "meters"): value * 1609.34,
        ("meters", "miles"): value / 1609.34
    }
    return conversions.get((from_unit, to_unit), None)

def convert_temperature(value, from_unit, to_unit):
    conversions = {
        ("celsius", "fahrenheit"): (value * 9/5) + 32,
        ("fahrenheit", "celsius"): (value - 32) * 5/9
    }
    return conversions.get((from_unit, to_unit), None)

def convert_weight(value, from_unit, to_unit):
    conversions = {
        ("kilograms", "pounds"): value * 2.20462,
        ("pounds", "kilograms"): value / 2.20462
    }
    return conversions.get((from_unit, to_unit), None)

# Function to handle conversion
def perform_conversion():
    try:
        value = float(entry_value.get())
        from_unit = from_unit_var.get()
        to_unit = to_unit_var.get()
        conversion_type = conversion_type_var.get()

        if conversion_type == "Length":
            result = convert_length(value, from_unit, to_unit)
        elif conversion_type == "Temperature":
            result = convert_temperature(value, from_unit, to_unit)
        elif conversion_type == "Weight":
            result = convert_weight(value, from_unit, to_unit)
        else:
            result = None

        if result is not None:
            result_label.config(text=f"Result: {round(result, 4)} {to_unit}")
        else:
            result_label.config(text="Invalid conversion units.")
    except ValueError:
        result_label.config(text="Please enter a valid number.")

# GUI setup
root = tk.Tk()
root.title("Unit Converter")
root.geometry("600x600")

# Dropdown for conversion type
conversion_type_var = tk.StringVar()
conversion_type_label = tk.Label(root, text="Select Conversion Type:")
conversion_type_label.pack()
conversion_type_dropdown = ttk.Combobox(root, textvariable=conversion_type_var, 
                                        values=["Length", "Temperature", "Weight"])
conversion_type_dropdown.pack()

# Entry for value
entry_value = tk.Entry(root)
entry_value.pack()
entry_value.insert(0, "Enter value")

# Dropdown for "from" unit
from_unit_var = tk.StringVar()
from_unit_label = tk.Label(root, text="From Unit:")
from_unit_label.pack()
from_unit_dropdown = ttk.Combobox(root, textvariable=from_unit_var)
from_unit_dropdown.pack()

# Dropdown for "to" unit
to_unit_var = tk.StringVar()
to_unit_label = tk.Label(root, text="To Unit:")
to_unit_label.pack()
to_unit_dropdown = ttk.Combobox(root, textvariable=to_unit_var)
to_unit_dropdown.pack()

# Update unit options based on conversion type
def update_units(event):
    conversion_type = conversion_type_var.get()
    units = {
        "Length": ["meters", "kilometers", "miles"],
        "Temperature": ["celsius", "fahrenheit"],
        "Weight": ["kilograms", "pounds"]
    }.get(conversion_type, [])
    from_unit_dropdown["values"] = units
    to_unit_dropdown["values"] = units

conversion_type_dropdown.bind("<<ComboboxSelected>>", update_units)

# Convert button
convert_button = tk.Button(root, text="Convert", command=perform_conversion)
convert_button.pack()

# Result label
result_label = tk.Label(root, text="Result:")
result_label.pack()

# Run the GUI
root.mainloop()
