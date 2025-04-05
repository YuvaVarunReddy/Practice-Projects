from flask import Flask, request, jsonify

app = Flask(__name__)

def convert_length(value, from_unit, to_unit):
    conversions = {
        ("meters", "kilometers"): value / 1000,
        ("kilometers", "meters"): value * 1000,
        ("miles", "meters"): value * 1609.34,
        ("meters", "miles"): value / 1609.34
    }
    return conversions.get((from_unit, to_unit), None)

@app.route("/convert", methods=["GET"])
def convert():
    value = float(request.args.get("value"))
    from_unit = request.args.get("from_unit").lower()
    to_unit = request.args.get("to_unit").lower()
    conversion_type = request.args.get("type").lower()

    if conversion_type == "length":
        result = convert_length(value, from_unit, to_unit)
    else:
        return jsonify({"error": "Invalid conversion type"}), 400
    

    return jsonify({"result": result})

if __name__ == "__main__":
    app.run(debug=True)
