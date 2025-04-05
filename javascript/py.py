import tkinter;

def convert_length(value, from_unit, to_unit):
    if from_unit == "meters" and to_unit == "kilometers":
        return value / 1000
    elif from_unit == "kilometers" and to_unit == "meters":
        return value * 1000
    elif from_unit == "miles" and to_unit == "meters":
        return value * 1609.34
    elif from_unit == "meters" and to_unit == "miles":
        return value / 1609.34
    else:
        return None

def convert_temperature(value, from_unit, to_unit):
    if from_unit == "Celsius" and to_unit == "Fahrenheit":
        return (value * 9/5) + 32
    elif from_unit == "Fahrenheit" and to_unit == "Celsius":
        return (value - 32) * 5/9
    else:
        return None

def convert_weight(value, from_unit, to_unit):
    if from_unit == "kilograms" and to_unit == "pounds":
        return value * 2.20462
    elif from_unit == "pounds" and to_unit == "kilograms":
        return value / 2.20462
    else:
        return None

def main():
    print("Welcome to the Unit Converter!")
    print("1. Length")
    print("2. Temperature")
    print("3. Weight")
    choice = input("Choose the type of conversion (1/2/3): ")

    if choice == "1":
        value = float(input("Enter the value to convert: "))
        from_unit = input("Enter the unit to convert from (meters, kilometers, miles): ").lower()
        to_unit = input("Enter the unit to convert to (meters, kilometers, miles): ").lower()
        result = convert_length(value, from_unit, to_unit)
        if result is not None:
            print(f"{value} {from_unit} is equal to {result} {to_unit}")
        else:
            print("Invalid conversion units.")

    elif choice == "2":
        value = float(input("Enter the value to convert: "))
        from_unit = input("Enter the unit to convert from (Celsius, Fahrenheit): ").capitalize()
        to_unit = input("Enter the unit to convert to (Celsius, Fahrenheit): ").capitalize()
        result = convert_temperature(value, from_unit, to_unit)
        if result is not None:
            print(f"{value} {from_unit} is equal to {result} {to_unit}")
        else:
            print("Invalid conversion units.")

    elif choice == "3":
        value = float(input("Enter the value to convert: "))
        from_unit = input("Enter the unit to convert from (kilograms, pounds): ").lower()
        to_unit = input("Enter the unit to convert to (kilograms, pounds): ").lower()
        result = convert_weight(value, from_unit, to_unit)
        if result is not None:
            print(f"{value} {from_unit} is equal to {result} {to_unit}")
        else:
            print("Invalid conversion units.")
    else:
        print("Invalid choice. Please select 1, 2, or 3.")

if __name__ == "__main__":
    main()