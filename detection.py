from flask import Flask, render_template, request, jsonify
import google.generativeai as genai
import os
from dotenv import load_dotenv
from PIL import Image
from waitress import serve

# Flask app initialization
app = Flask(__name__)
load_dotenv()

# Configure Gemini API
API_KEY = os.getenv('GOOGLE_API_KEY')  # Correct environment variable key
genai.configure(api_key=API_KEY)

# Initialize Gemini model
model = genai.GenerativeModel('gemini-2.0-flash')


def analyze_image(image):
    """Analyze plant leaf image using Gemini"""
    prompt = """
    
    1. Identify if there's any disease present
    2. Name the disease (if any)

    """

    response = model.generate_content([prompt, image])
    return response.text


@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        if 'file' not in request.files:
            return jsonify({'error': 'No file uploaded'}), 400

        file = request.files['file']
        if file.filename == '':
            return jsonify({'error': 'No selected file'}), 400

        try:
            img = Image.open(file.stream)
            analysis = analyze_image(img)
            return render_template('detection-result.html', analysis=analysis)

        except Exception as e:
            return jsonify({'error': str(e)}), 500

    return render_template('detection.html')


# Main entry point
if __name__ == '__main__':
    # Production-ready serving with Waitre
    serve(app, host='127.0.0.1', port=8010)

