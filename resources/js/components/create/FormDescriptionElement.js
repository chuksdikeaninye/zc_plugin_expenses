import React from "react";
export default function FormDescriptionElement(props) {
    return (
        <div className="form-group">
            <label htmlFor="description">Description</label>
            <textarea
                className="form-control"
                id="description"
                rows="4"
                placeholder="Description"
            ></textarea>
        </div>
    );
}
