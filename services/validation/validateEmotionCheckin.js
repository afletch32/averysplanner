import { ValidationError } from './errors.js';

function isNullableString(value) {
  return value === null || value === undefined || typeof value === 'string';
}

export function validateEmotionCheckin(payload) {
  if (!payload || typeof payload !== 'object') {
    throw new ValidationError('checkin must be an object');
  }
  if (!payload.mood || typeof payload.mood !== 'string') {
    throw new ValidationError('mood is required');
  }
  if (!isNullableString(payload.bodyState)) {
    throw new ValidationError('bodyState must be a string or null');
  }
  if (!isNullableString(payload.reason)) {
    throw new ValidationError('reason must be a string or null');
  }
  if (!isNullableString(payload.note)) {
    throw new ValidationError('note must be a string or null');
  }
}
